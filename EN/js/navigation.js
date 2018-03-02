$(document).ready(function(){


	// //////////////////////// Separador ///////////////////////////////
	$('.section .cut').each(function() {
			if ($(this).hasClass('cut-top'))
				$(this).css('border-right-width', $(this).parent().width() + "px");
			else if ($(this).hasClass('cut-bottom'))
				$(this).css('border-left-width', $(this).parent().width() + "px");
		});


	// //////////////////////// Menu ///////////////////////////////

	var $menuButtons=$(".menu-button"),
		$toggleButton=$(".menu-toggle-button"),

		menuOpen=true,
		buttonsNum=$menuButtons.length,
		buttonsMid=(buttonsNum=0),
		spacing=70;

	function openmenuMenu(){

		TweenMax.to($toggleButton,0.1,{
			scaleX:0.6,
			scaleY:1.2,
			ease:Quad.easeOut,
			onComplete:function(){
				TweenMax.to($toggleButton,.8,{
					scale:0.6,
					ease:Elastic.easeOut,
					easeParams:[1.1,0.8]
				})
				TweenMax.to($toggleButton.children(".menu-icon"),.8,{
					scale:0.8,
					ease:Elastic.easeOut,
					easeParams:[1.1,0.6]
				})
			}
		})
		$menuButtons.each(function(i){
			var $cur=$(this);
			var pos=i-buttonsMid;
			if(pos>=0) pos+=1;
			var dist=Math.abs(pos);
			$cur.css({
				zIndex:buttonsMid-dist
			});
			TweenMax.to($cur,0.8*(dist),{
				y:pos*spacing,
				scaleY:1.1,
				scaleX:0.6,
				ease:Elastic.easeOut,
				easeParams:[1.01,0.5]
			});
			TweenMax.to($cur,.8,{
				delay:(0.2*(dist))-0.1,
				scale:0.6,
				ease:Elastic.easeOut,
				easeParams:[1.1,0.6]
			})
				
			TweenMax.fromTo($cur.children(".menu-icon"),0.2,{
				scale:0
			},{
				delay:(0.2*dist)-0.1,
				scale:1,
				ease:Quad.easeInOut
			})
		})

	}
	function closemenuMenu(){
		TweenMax.to([$toggleButton,$toggleButton.children(".menu-icon")],1.4,{
			delay:0.1,
			scale:1,
			ease:Elastic.easeOut,
			easeParams:[1.1,0.3]
		});
		$menuButtons.each(function(i){
			var $cur=$(this);
			var pos=i-buttonsMid;
			if(pos>=0) pos+=1;
			var dist=Math.abs(pos);
			$cur.css({
				zIndex:dist
			});

			TweenMax.to($cur,0.6+((buttonsMid-dist)*0.1),{
				y:0,
				scale:.95,
				ease:Quad.easeInOut,
			});
				
			TweenMax.to($cur.children(".menu-icon"),0.2,{
				scale:0,
				ease:Quad.easeIn
			});
		})
	}

	openmenuMenu();

	function togglemenuMenu(){
		menuOpen=!menuOpen

		menuOpen?openmenuMenu():closemenuMenu();
	}
	$toggleButton.on("mousedown",function(){
		togglemenuMenu();
	})




	// //////////////////////// Share ///////////////////////////////

	var shareItemNum=$(".share-item").length;
	var angle=100;
	var distance=90;
	var startingAngle=45+(-angle/2);
	var slice=angle/(shareItemNum-1);
	TweenMax.globalTimeScale(0.8);
	$(".share-item").each(function(i){
		var angle=startingAngle+(slice*i);
		$(this).css({
			transform:"rotate("+(angle)+"deg)"
		})
		$(this).find(".share-item-icon").css({
			transform:"rotate("+(-angle)+"deg)"
		})
	})
	var on=false;

	$(".share-toggle-button").mousedown(function(){
		TweenMax.to($(".share-toggle-icon"),0.1,{
			scale:0.65
		})
	})
	$(document).mouseup(function(){
		TweenMax.to($(".share-toggle-icon"),0.1,{
			scale:1
		})
	});
	$(document).on("touchend",function(){
		$(document).trigger("mouseup")
	})
	$(".share-toggle-button").on("mousedown",pressHandler);
	$(".share-toggle-button").on("touchstart",function(event){
		$(this).trigger("mousedown");
		event.preventDefault();
		event.stopPropagation();
	});

	function pressHandler(event){
		on=!on;

		TweenMax.to($(this).children('.share-toggle-icon'),0.5,{
			rotation:on?180:0,
			ease:Quint.easeInOut,
			force3D:true
		});

		on?openshare():closeshare();
		
	}
	function openshare(){
		$(".share-item").each(function(i){
			var delay=i*0.05;

			var $bounce=$(this).children(".share-item-bounce");

			TweenMax.fromTo($bounce,0.2,{
				transformOrigin:"50% 50%"
			},{
				delay:delay,
				scaleX:0.8,
				scaleY:1.2,
				force3D:true,
				ease:Quad.easeInOut,
				onComplete:function(){
					TweenMax.to($bounce,0.15,{
						// scaleX:1.2,
						scaleY:0.7,
						force3D:true,
						ease:Quad.easeInOut,
						onComplete:function(){
							TweenMax.to($bounce,3,{
								// scaleX:1,
								scaleY:0.8,
								force3D:true,
								ease:Elastic.easeOut,
								easeParams:[1.1,0.12]
							})
						}
					})
				}
			});

			TweenMax.to($(this).children(".share-item-button"),0.5,{
				delay:delay,
				y:distance,
				force3D:true,
				ease:Quint.easeInOut
			});
		})
	}
	function closeshare(){
		$(".share-item").each(function(i){
			var delay=i*0.08;

			var $bounce=$(this).children(".share-item-bounce");

			TweenMax.fromTo($bounce,0.2,{
				transformOrigin:"50% 50%"
			},{
				delay:delay,
				scaleX:1,
				scaleY:0.8,
				force3D:true,
				ease:Quad.easeInOut,
				onComplete:function(){
					TweenMax.to($bounce,0.15,{
						// scaleX:1.2,
						scaleY:1.2,
						force3D:true,
						ease:Quad.easeInOut,
						onComplete:function(){
							TweenMax.to($bounce,3,{
								// scaleX:1,
								scaleY:1,
								force3D:true,
								ease:Elastic.easeOut,
								easeParams:[1.1,0.12]
							})
						}
					})
				}
			});
			

			TweenMax.to($(this).children(".share-item-button"),0.3,{
				delay:delay,
				y:0,
				force3D:true,
				ease:Quint.easeIn
			});
		})
	}





	
})