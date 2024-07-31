/* ####################################### */
/* 2017 HEADER							   */
/* ####################################### */
header{
	position: fixed;
	top: 0px;
	width: 100%;
	height: 100px;
	background-color: #4C4D4E;
	z-index: 500;
	font-family: 'Roboto', sans-serif;
	box-shadow: 0px 3px 10px rgba(0,0,0,0.4);
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	transition: all 0.5s;
}

header.closed{
	height: 66px;
}

	/* 1000px container */
	header .container{
		display: block;
		width: 1000px;
		height: 100px;
		margin-left: auto;
		margin-right: auto;
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		transition: all 0.5s;
		overflow: hidden;
	}

	header.closed .container{
		height: 66px;
		margin-top: 0px;
	}

	header .headerlogo{
		display: inline-block;
		width: 212px;
        position: relative;
        vertical-align: top;
	}
        header .headerlogo img{
            position: absolute;
            top: 3px;
            width: 200px;
        }

	header .headermenu{
		display:inline-block;
		width: 1000px;
		position: relative;
		height: 72px;
		top: 11px;
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		transition: all 0.5s;
	}
	header.closed .headermenu{
		height: 48px;
	}

	header #header_line1{
		display: block;
		height: 28px;
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		transition: all 0.5s;
        opacity: 1;
        position: relative;
        top: 0px;
	}
	header.closed #header_line1{
		height: 0px;
        opacity: 0;
        top: -34px;
	}

	header #header_line2{
		display:block;
		height: 13px;
		overflow-y: hidden;
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		transition: all 0.5s;
        opacity: 1;
        position: relative;
        top: 0px;
	}
	header.closed #header_line2{
		height: 0px;
        opacity: 0;
        top: -5px;
	}

	header #header_line3{
		display:block;
		height: 30px;
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		transition: all 0.5s;
		margin-top: 0px;
	}
	header.closed #header_line3{
		margin-top: 7px;
	}



	header .headerIconImg{
		display: inline-block;
		vertical-align:middle;
		position: absolute;
		top: -2px;
	}

	header .header_uspcontainer{
		display: flex;
        flex-direction: row;
        justify-content: space-between;
		width: 1000px;
        height: 25px;
        overflow-x: visible;
	}

        header .header_uspcontainer .header_usp{
            display: inline-block;
            white-space: nowrap;
        }
            header .header_uspcontainer .header_usp:nth-child(1){
                margin-left: 0px;
            }

            header .header_uspcontainer .header_usp .icon{
                display: inline-block;
                width: 25px;
                height: 25px;
                position: relative;
            }

            header .header_uspcontainer .header_usp .icon img{
                vertical-align: middle;
                position: absolute;
                top: 0px;
            }

            header .header_uspcontainer .header_usp .icon.star img{
                position: absolute !important;
            }

                .header_uspcontainer .header_usp .star1{
                    position: absolute;
                    left: -16px !important;
                    top: 0px !important;
                }
                .header_uspcontainer .header_usp .star2{
                    position: absolute;
                    left: -4px !important;
                    top: 0px !important;
                }
                .header_uspcontainer .header_usp .star3{
                    position: absolute;
                    left: 8px !important;
                    top: 0px !important;
                }
                .header_uspcontainer .header_usp .star4{
                    position: absolute;
                    left: -10px !important;
                    top: 10px !important;
                }
                .header_uspcontainer .header_usp .star5{
                    position: absolute;
                    left: 3px !important;
                    top: 10px !important;
                }

            header .header_uspcontainer .header_usp .text{
                display: inline-block;
                white-space: nowrap;
                font-size: 12px;
                font-family: 'Roboto', sans-serif;
                font-weight: 500;
                color: #E6E6E6;
                line-height: 25px;
                vertical-align: top;
            }


		/* Category button */
		header .categoryButton{
			position: relative;
			display: inline-block;
			width: 144px;
			background-color: #8CD50B;
			line-height: 30px;
			border-radius: 5px;
			vertical-align: top;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			white-space: nowrap;
		}
			header .categoryButton .buttonText{
				display: block;
				position: relative;
				left: 2px;
				vertical-align: middle;
				color: #4C4D4E;
				text-align: center;
				font-weight: 700;
				font-size: 15px;
				vertical-align: top;
			}

		header .categoryButton:hover{
			cursor: pointer;
		}


		/* OF text */
		header .of{
			vertical-align: top;
			display: inline-block;
			color: #FFFFFF;
			font-size: 15px;
			font-weight: 500;
			width: 37px;
			text-align: center;
			line-height: 30px;
		}


		/* Search field */
		header .searchField{
			padding: 0px;
			display: inline-block;
			background-color: #FFFFFF;
			color: #B3B3B3;
			width: 270px;
			border-radius: 5px;
			overflow: hidden;
			-webkit-transition: all 0.5s;
			-moz-transition: all 0.5s;
			transition: all 0.5s;
		}

			header .searchField .searchFieldInput{
				display: inline-block;
				width: 225px;
				-webkit-transition: all 0.5s;
				-moz-transition: all 0.5s;
				transition: all 0.5s;
				line-height: 26px !important;
			}
				header .searchField .searchFieldInput .searchFieldInputField{
					border: 0px;
					width: 225px;
					height: 30px;
					color: #4C4D4E;
					margin-left: 10px;
					padding: 0px;
					outline: none;
					-webkit-transition: all 0.5s;
					-moz-transition: all 0.5s;
					transition: all 0.5s;
				}

				header .searchField .searchFieldInput .searchFieldInputField::-webkit-input-placeholder {
					color: #B3B3B3;
					font-style: italic;
					font-weight: 300;
				}
				header .searchField .searchFieldInput .searchFieldInputField::-moz-placeholder {
					color: #B3B3B3;
					font-style: italic;
					font-weight: 300;
				}
				header .searchField .searchFieldInput .searchFieldInputField:-ms-input-placeholder {
					color: #B3B3B3;
					font-style: italic;
					font-weight: 300;
				}
				header .searchField .searchFieldInput .searchFieldInputField:-moz-placeholder {
					color: #B3B3B3;
					font-style: italic;
					font-weight: 300;
				}
				header .searchField .searchFieldInput .searchFieldInputField::-ms-clear {
					display: none;
				}

			header .searchField .searchFieldIcon{
				display: inline-block;
				width:30px;
				float:right;
				background-color: #8CD50B;
				text-align:center;
			}

			header .searchField .searchFieldIcon .searchFieldIconImg{
				vertical-align:middle;
				cursor: pointer;
			}


		/* Header blocks */
		header .headerBlocks{
			display: inline-block;
			float: right;
			color: #FFFFFF;
		}
			header .headerBlocks .headerBlock{
				display: inline-block;
				vertical-align:top;
				float:left;
				margin-right: 10px;
				position: relative;
			}
				header .headerBlocks .headerBlock:last-child{
					padding-right: 10px;
					margin-right: 0px;
				}
				header .headerBlocks .headerLink{
					vertical-align:top;
					display: inline-block;
					font-weight: 500;
					color: #FFFFFF;
					line-height: 30px;
					font-size: 15px;
				}
				header .headerBlocks .headerLink:hover{
					text-decoration: underline;
					cursor: pointer;
				}

				header .headerBlocks .headerLink.accountname{
					width: 140px;
					overflow:hidden;
					white-space:nowrap;
					text-overflow: ellipsis;
					text-align: right;
					text-transform: uppercase;
				}

				header .headerBlocks .headerIcon{
					position: relative;
					vertical-align:top;
					display: inline-block;
					width: 30px;
					height: 30px;
				}
				header .headerBlocks .wishlistNumber{
					display: none;
					vertical-align:top;
					position: absolute;
					right: -5px;
					background-color: #008FD5;
					border-radius: 50%;
					min-width: 15px;
					height: 15px;
					line-height: 15px;
					text-align: center;
					margin-top: -3px;
					color: #FFFFFF;
					font-size:11px;
				}
					header .headerBlocks .wishlistNumber.show{
						display: inline-block;
					}
				header .headerBlocks .number{
					font-size: 11px;
					color: #FFFFFF;
					text-align: center;
					line-height: 20px;
				}* {
	margin:0;
	padding:0;
	-webkit-text-size-adjust:none;
}

/* ####################################### */
/* HTNL/BODY, De hoofdsettings van de site */
/* ####################################### */
html {
	height: 100%;
	min-height:100%;
	box-sizing: border-box;
}

body {
	overflow: -moz-scrollbars-vertical;
	overflow-y: scroll;
	height: 100%;
	min-height: 100%;
	min-width: 1000px;
	font-family: arial, verdana, sans-serif;
	color: #444444;
	font-size: 14px;
	margin: 0px;
	padding: 0px;
	position: relative;
}

a {
	text-decoration: none;
	color: #2B2B2B;
}

img {
	border: 0px;
}

label{
	cursor: pointer;
}

input[type=text], input[type=password], input[type=submit], input[type=button], input[type=select]{
	-webkit-appearance: none;
	border-radius: 0;
	padding: 2px;
	border: 1px solid #999999;
	background-color: #FFFFFF;
}

select {
	border-radius: 0;
	border: 1px solid #999999;
	box-sizing: border-box;
}

.linkwhite{
	cursor: pointer;
}

/* ####################################### */
/* 2017 ALGEMENE STYLES					   */
/* ####################################### */
.koptitel{
	display:block;
	font-family: 'Roboto', sans-serif;
	font-size: 20px;
	font-weight: 700;
	color: #8CD50B;
	margin-left: 10px;
	margin-bottom: 10px;
	text-transform: uppercase;
	clear: both;
	line-height: 15px;
}
.koptitel:before {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.koptitel.margintop5{
	margin-top:5px;
}

.lineNoMargin{
	display: block;
	height: 1px;
	width:100%;
	background-color: #B3B3B3;
}
	.lineNoMargin.px5l{
		margin-left: 5px;
	}
	.lineNoMargin.px5l:last-child{
		margin-left: 0px;
	}
	.lineNoMargin.bottom10{
		margin-bottom: 10px;
	}
	.lineNoMargin.bottom20{
		margin-bottom: 20px;
	}

.text_green{
	color: #009900;
}

.text_red{
	color: #D90000;
}


.notify{
	display: none;
	position: fixed;
	top: 50px;
	padding: 15px;
	width: 1000px;
	text-align:center;
	z-index: 400;
	margin: 10px;
}

	.notify .title{
		display: block;
		font-family: 'Roboto', sans-serif;
		font-size: 15px;
		font-weight: 700;
		color: #8CD50B;
		text-transform: uppercase;
	}

	.notify .container{
		display: inline-block;
		text-align: right;
		width: unset;
	}

	.notify .notifycontent{
		background-color: #FFFFFF;
		box-shadow: 3px 3px 25px rgba(0,0,0,0.6);
		padding: 25px;
		border-radius: 10px;
		position: relative;
		text-align: center;
		overflow: hidden;
		min-width: 300px;
		min-height: 70px;
		line-height: 20px;
	}
		.notify .notifycontent img{
			max-height: 75vh;
		}

	.notify .sluiten{
		position: relative;
		font-family: 'Roboto', sans-serif;
		font-size: 17px;
		font-weight: 700;
		margin-right: 10px;
		cursor: pointer;
	    top: 30px;
	    color: #4C4D4E;;
	    z-index: 502;
	}
		.notify .sluiten .cross{
			display: inline-block;
			font-size: 20px;
			position: relative;
			top: -4px;
		}
		.notify .sluiten .text{
			display: inline-block;
			margin-left: 10px;
			position: relative;
			top: -5px;
		}

/* ####################################### */
/* PRICER 2019					 */
/* ####################################### */
	.priceBlock{
		display: inline-block;
		position: absolute;
		right: 0px;
		top: 11px;
	}
		.priceBlock.staffel{
			top: 0px;
		}

		.priceBlock .pricer{
			display: inline-block !important;
			vertical-align: top;
		}

		.priceBlock .shopbutton{
			display:inline-block;
			width: 38px;
			height: 38px;
			margin: 0px 5px 0px 5px !important;
			background-color:  #008FD5;
			background-image: url('/templates/basic/images/icoon_winkelwagen.png');
			background-position: center center;
			background-repeat: no-repeat;
			cursor: pointer;
			vertical-align: top;
		}

	.priceBlock .staffelinfo{
		display: block;
		position: absolute;
		width: 158px;
		height: 20px;
		top: 43px;
		right: 5px;
		border: 1px solid #000;
		box-sizing: border-box;
		cursor: pointer;
		white-space: nowrap;
	}
		.priceBlock .staffelinfo .procent{
			display: inline-block;
			position: absolute;
			top: 1px;
			width: 18px;
			text-align: center;
			font-size: 14px;
			color: #8CD50B;
			font-weight: bolder;

		}
		.priceBlock .staffelinfo .text{
			display: inline-block;
			position: absolute;
			left: 15px;
			top: 3px;
			width: 138px;
			text-align: center;
			text-transform: uppercase;
			font-size: 10px;
			font-family: 'Roboto', sans-serif;
			font-weight: bolder;
		}

	.priceBlock .vanvoor{
		display: inline-block;
		position: absolute;
		right: 170px;
		top: 4px;
		min-width: 70px;
		font-family: Roboto, 'Arial', sans-serif;
		font-size: 18px;
		color: #999999;
	}
		.priceBlock .vanvoor .prijs{
			display: block;
			width: 100%;
			position: absolute;
			top: 6px;
			text-align:center;
		}
		.priceBlock .vanvoor .line{
			display: block;
			width: 100%;
			height: 100%;
			position: absolute;
			top: 14px;
			left: 0px;
			border-bottom: 1px solid #4C4D4E;
			-webkit-transform: rotate(170deg);
			transform: rotate(170deg);
		}









	/* ####################################### */
	/* 2017 ALGEMENE STYLES	- INVOERVELDEN	   */
	/* ####################################### */
	.input_row{
		display: block;
		margin-left: 10px;
		margin-top: 5px;
	}
		.input_row .input_left{
			display: inline-block;
			width: 200px;
			vertical-align:top;
		}
		.input_row .input_right{
			display: inline-block;
			width: 500px;
			vertical-align:top;
		}

	.input_opslaan{
		display: inline-block;
		background-color: #008FD5;
		margin-left: 10px;
		padding: 10px;
		font-family: "Roboto", sans-serif;
		font-size: 13px;
		font-weight: 500;
		color: #FFFFFF;
		cursor: pointer;
	}

	/* ####################################### */
	/* 2017 ALGEMENE STYLES	- PRODUCT BLOCK	   */
	/* ####################################### */

	.productBlock:not(.overrule){
		display: 				grid;
		grid-template-columns:  36px 36px 36px 36px 36px;
		grid-template-rows:     auto;
		grid-template-areas:    "blockTitle blockTitle blockTitle blockTitle blockTitle"
			"blockImg blockImg blockImg blockImg blockImg"
			"blockEnergy blockEnergy blockPricer blockPricer blockPricer"
			"blockEnergy blockEnergy blockPricer blockPricer blockPricer"
			"blockCompare blockCompare blockCompare blockCompare blockHeart";
		justify-content: 		center;
		width: 					200px;
		border-bottom: 			1px solid #EEEEEE;
		border-right: 			1px solid #EEEEEE;
		box-sizing: 			border-box;
	}
		.productBlock .title{
			grid-area:      blockTitle;
			font-family: 	'Roboto', sans-serif;
			font-size: 		12px;
			font-weight: 	700;
			margin-top: 	5px;
			height: 		35px;
			overflow:		hidden;
			line-height:	18px;
		}
		.productBlock .image{
			grid-area:      		blockImg;
			height: 				180px;
			background-position: 	center top;
			background-repeat: 		no-repeat;
			position: 				relative;
			text-align: 			center;
		}
			.productBlock .image .usp{
				margin-left: 			0px;
			}

		.productBlock .energielabel{
			grid-area:      blockEnergy;
			position:		relative;
		}

		.productBlock .pricerspace{
			grid-area:      blockPricer;
			padding-bottom: 20px;
		}
			.productBlock .pricerspace .pricer{
				min-width: 100px;
			}

		.productBlock .compareContainer{
			grid-area:      blockCompare;
			position:		relative;
		}

		.productBlock .wlheartContainer{
			grid-area:      	blockHeart;
			display:			grid;
			justify-content: 	center;
  			align-content: 		end;
			margin:				6px 0px 10px 10px;
			border-radius:		3px;
			cursor:				pointer;
		}

		.productBlock .wlheartContainer .wlheart{
			display: 		inline-block !important;
		}
		

	/* ####################################### */
	/* 2017 ALGEMENE STYLES	- PRODUCT LIST HEADER   */
	/* ####################################### */

	.navigation .content_list .header{
		display: block;
		height: 40px;
		line-height: 40px;
	}

		.navigation .content_list .header .weergave{
			display: inline-block;
			float: left;
			margin-left: 20px;
		}
			.navigation .content_list .header .weergave .weergavetype{
				display: inline-block;
				margin-right: 20px;
			}
			.navigation .content_list .header .weergave .weergavetype:hover{
				text-decoration: underline;
				cursor: pointer;
			}
				.navigation .content_list .header .weergave .weergavetype .icon{
					display: inline-block;
					line-height: 40px;
					height: 40px;
					padding-right: 5px;
				}
				.navigation .content_list .header .weergave .weergavetype .icon img{
					vertical-align: middle;
					position: relative;
					top: -2px;
				}
				.navigation .content_list .header .weergave .weergavetype .title{
					display: inline-block;
					line-height: 40px;
					font-family: 'Roboto', sans-serif;
					font-size: 12px;
					font-weight: 500;
					text-decoration: inherit;
				}

		.navigation .content_list .header .navigatie{
			display: inline-block;
			margin-left: 30px;
		}
			.navigation .content_list .header .navbutton{
				display: inline-block;
				line-height: 40px;
				height: 40px;
				text-align: center;
				width: 30px;
				cursor: pointer;
			}
			.navigation .content_list .header .navbutton img{
				vertical-align: middle;
				position: relative;
				top: -1px;
			}
			.navigation .content_list .header .pagenav{
				display: inline-block;
				line-height: 40px;
				height: 40px;
			}

		.navigation .content_list .header .showoptions{
			display: inline-block;
			float: right;
		}
			.navigation .content_list .header .showoptions .pageoption{
				display: inline-block;
				float: left;
			}
			.navigation .content_list .header .showoptions .pageoption:last-child{
				margin-left: 20px;
			}

	/* ####################################### */
	/* 2017 ALGEMENE STYLES	- PRODUCT LIST	   */
	/* ####################################### */

	.productList{
		display: block;
		width: 800px;
	}

	.teksten .productList{
		display: block;
		width: 1000px !important;
	}
		.teksten .productList .content{
			width: 760px !important;
		}

	.productList.width1000{
		display: block;
		width: 1000px !important;
	}
		.productList .container{
			display: block;
			margin: 20px 0px 20px 20px;
			cursor: default;
			position: relative;
		}

			.productList .container .image{
				width: 220px;
				min-height: 200px;
				display: inline-flex;
			    align-items: center;
			    justify-content: center;
				position: relative;
				/*display: inline-block;
				background-position: center center;
				background-repeat: no-repeat;
				background-size: 180px;*/
			}

			.productList .container .content{
				display: inline-block;
				width: 560px;
				vertical-align: top;
			}

			.productList.width1000 .container .content{
				width: 750px;
			}

				.productList .container .title{
					display: block;
					font-family: 'Roboto', sans-serif;
					font-size: 18px;
					font-weight: 700;
					white-space: nowrap;
					overflow: hidden;
					text-overflow: ellipsis;
					padding: 0px 5px 0px 0px;
				}

				.productList .container .content .subtitle{
					display: block;
					font-family: 'Arial', sans-serif;
					font-size: 11px;
					font-weight: 400;
					line-height: 30px;
					padding: 0px 5px 0px 5px;
					position: relative;
				}
					.productList .container .content .wlheart{
						cursor: 				pointer;
						position: 				absolute;
						right: 					0px;
						top: 					4px;
						-webkit-user-select: 	none;
						user-select: 			none;
					}
					.productList .container .content .wlheartAmount{
						position: 				absolute;
						right: 					25px;
						top: 					0px;
						font-size: 				11px;
						color: 					#999;
						font-family: 			arial, verdana, sans-serif;
						font-weight: 			400;
						-webkit-user-select: 	none;
						user-select: 			none;
					}

			.productList .container .template{
				display: 		block;
				min-height: 	160px;
			}

			.productList .container .template .t0{
				display: block;
				line-height: 25px;
				background-color: #FFFFFF;
				font-family: 'Arial', sans-serif;
				font-size: 12px;
				font-weight: 400;
				clear: both;
			}
			.productList .container .template .t0:nth-child(2n){
				background-color: #EEEEEE;
			}
			.productList .container .template .t1{
				display: inline-block;
				width: 220px;
				padding-left: 5px;
				vertical-align:top;
			}
			.productList .container .template .t2{
				display: inline-block;
				width: 320px;
				/* white-space: nowrap; */
				/* overflow: hidden; */
				/* text-overflow: ellipsis; */
				vertical-align:top;
			}
			.productList.width1000 .container .template .t2{
				width: 510px;
			}

			.productList .container .footer{
				display: block;
				height: 38px;
				line-height: 38px;
				margin-top: 10px;
				position: relative;
			}
				.productList .container .footer.staffel{
					height: 52px;
				}

				.productList .container .footer .priceBlock{
					top: 0px;
					line-height: normal;
				}

				.productList .meerinfo{
					display: inline-block;
					font-family: 'Arial', sans-serif;
					font-size: 13px;
					font-weight: 400;
					color: #008FD5;
					padding-left: 5px;
					cursor: pointer;
				}
				.productList .meerinfo:hover{
					text-decoration: underline;
				}

		.compareContainer{
			position: 				absolute;
			bottom: 				0px;
			left: 					0px;
			display:                grid;
			grid-template-columns:  16px auto;
			grid-template-rows:     auto;
			grid-template-areas:    
				"compareStart compareStart"
				"compareCheckbox compareLabel"
		}
		.compareContainer .compareCheck{
			grid-area:      compareCheckbox;
			display: 		inline-block;
			line-height:	38px;
			font-size: 		13px;
			color: 			#666;
			margin-right:	5px;
			vertical-align: bottom;
		}
			.compareContainer .compareCheck input[type=checkbox]{
				position: 		relative;
				top: 			2px;
				accent-color: 	#008FD5;
			}
			.compareContainer .compareCheck input[type=checkbox]:disabled{
				opacity: 		0.5;
				accent-color: 	#DDDDDD;
			}

		.compareContainer .compareLabel{
			grid-area:      compareLabel;
			display: 		inline-block;
			line-height:	38px;
			font-size: 		13px;
			color: 			#666;
			vertical-align: bottom;
		}
			.compareContainer .compareStart{
				display: none;
			}
				.compareContainer.compare .compareStart{
					grid-area:          compareStart;
					display: 			block;
					position:			relative;
					left:				-6px;
					bottom:				-2px;
					padding:			5px;
					background-color:	#008FD5;
					color:				#FFF;
					font-size:			13px;
					text-align:			center;
					border-radius:		3px;
					cursor: 			pointer;
				}
					.compareContainer.compare .compareStart .compareTriangel{
						position: 		absolute;
						bottom: 		-6px;
						left:			6px;
						border-top: 	6px solid #008FD5;
						border-left: 	6px solid transparent;
						border-right: 	6px solid transparent;
					}
				
				.compareContainer.compare .compareStart:hover{
					background-color:	#006999;
				}
				.compareContainer.compare .compareStart:hover .compareTriangel{
					border-top: 	6px solid #006999;
				}

				.compareContainer label{
					user-select: none;
					-webkit-user-select: none;
  					-ms-user-select: none;
				}
				.compareContainer .compareLabel .limit{
					opacity: 0.5;
				}
		.main_container #compareOverview{
			display: 			none;
			position: 			fixed;
			bottom:				0px;
			right:				10px;
			background-color: 	#008FD5;
			max-width:			350px;
			border-radius:		5px 5px 0px 0px
		}
			.main_container #compareOverview.show{
				display: 		inline-block;
				z-index:		100;
			}
			.main_container #compareOverview #compareOverviewHeader{
				display: 		flex;
				align-items: 	center;
				position: 		relative;
				padding: 		8px;
				color: 			#FFF;
				line-height:	30px;
				cursor:			pointer;
			}
				.main_container #compareOverview #compareOverviewHeader>.c_arrow {
					display: 		inline-block;
					text-align:		center;
					width:			30px;
					font-size:		20px;
				}
				.main_container #compareOverview #compareOverviewHeader>.c_arrow img{
					max-width: 		15px;
					max-height: 	15px;
					vertical-align: middle;
				}
				.main_container #compareOverview.open #compareOverviewHeader>.c_arrow{
					transform: rotate(180deg);
				}

				.main_container #compareOverview #compareOverviewHeader>.c_header{
					display: 			inline-block;
				}

				.main_container #compareOverview #compareOverviewHeader>.c_compare{
					display: 			none;
					position:			absolute;
					right:				8px;
					background-color: 	#FFF;
					color:				#008FD5;
					border-radius:		5px;
					padding:			0px 5px 0px 5px;
					box-sizing:			border-box;
				}
					.main_container #compareOverview #compareOverviewHeader>.c_compare.show{
						display: inline-block;
					}
					.main_container #compareOverview #compareOverviewHeader>.c_compare:hover{
						cursor: pointer;
						background-color: 	#008FD5;
						color:				#FFF;
						border: 			1px solid #FFF;
					}

			.main_container #compareOverview #compareOverviewContent{
				padding: 			0px;
				color: 				#666;
				background-color: 	#FFF;
				line-height:		15px;
				box-sizing:			border-box;
				border-left:		1px solid #999;
				border-right:		1px solid #999;
				max-height:			0px;
				overflow-y:			hidden;
				-webkit-transition: max-height 0.2s;
				-moz-transition: 	max-height 0.2s;
				transition: 		max-height 0.2s;
			}

			.main_container #compareOverview .compareLine{
				display:                grid;
				grid-template-columns:  70px auto 40px;
				grid-template-rows:     auto;
				grid-template-areas:    
					"compareOverviewImg compareOverviewTitle compareOverviewDelete";
				padding:				5px;
				border-bottom:			1px solid #DDD;
			}
				.main_container #compareOverview .compareLine div:nth-child(1){
					grid-area: 	compareOverviewImg;
				}
				.main_container #compareOverview .compareLine div:nth-child(2){
					display: 			flex;
					align-items: 		center;
					justify-content: 	start;
					grid-area: 			compareOverviewTitle;
					padding:			0px 5px 0px 5px;
				}
				.main_container #compareOverview .compareLine div:nth-child(3){
					grid-area: 	compareOverviewDelete;
					display: 			flex;
					align-items: 		center;
					justify-content: 	center;
					font-weight:		900;
				}
					.main_container #compareOverview .compareLine div:nth-child(3):hover{
						cursor: 			pointer;
						box-sizing:			border-box;
						background-color: 	#008FD5;
						color: 				#FFF;
						border-radius:		5px;
					}

	/* ####################################### */
	/* 2017 ALGEMENE STYLES	- USP	   */
	/* ####################################### */
	.uspWrap{
	    position: absolute;
	    top: 10px;
	    left: 0;
		z-index: 10;
	}

	.usp{
		margin-left: 5px;
		display: inline-block;
		height: 15px;
		font-family: 'Roboto', sans-serif;
		font-size: 10px;
		/*font-style: italic;*/
		font-weight: 500;
		line-height: 15px;
		text-transform: uppercase;
		background-color: #D90000;
		color: #FFFFFF;
		padding-left: 4px;
		float: left;
		clear: left;
		margin-bottom:4px;
		white-space: nowrap;
	}
	.usp:after{
		content: "";
		display: inline-block;
		width: 0;
		height: 0;
		background-color: transparent;
		border-right: 15px solid transparent;
		border-top: 15px solid #D90000;
		position: absolute;
	}
	.usp.large{
		margin-left: 0px;
		height: 20px;
		font-size: 12px;
		line-height: 20px;
	}
	.usp.large:after{
		border-right: 20px solid transparent;
		border-top: 20px solid #D90000;
	}

	.usp_tekst > a{
		text-decoration:underline;
	}

	/* ####################################### */
	/* 2017 ALGEMENE STYLES	- PRICER		   */
	/* ####################################### */
	.pricer{
		display: block;
		min-width: 115px;
		height: 38px;
		text-align: center;
		line-height: 38px;
		background: linear-gradient(135deg, #84C100 0%,#84C100 89%,#8CD50B 89%,#8CD50B 100%);
		font-family: 'Roboto', sans-serif;
		font-weight: 500;
		color: #FFFFFF;
	}

	.pricer.large{
		width: 170px;
		height: 50px;
		line-height: 50px;
		margin-right: 10px;
	}

	.pricer .pricecontainer{
		display: block;
		height: 38px;
		position: relative;
		left: 2px;
		color: #FFFFFF;
		margin-right: 10px;
		margin-left: 10px;
		white-space:nowrap;
	}
	.pricer.large .pricecontainer{
		margin-right: 5px;
		margin-left: 5px;
	}

	.pricer.teaser .pricecontainer{
		font-size: 22px;
		white-space: initial;
		line-height: 22px;
		padding-top: 8px;
		box-sizing: border-box;
	}

	.priceBlock .pricer.teaser .pricecontainer{
		font-size: 15px;
		line-height: 15px;
		padding-top: 5px;
		box-sizing: border-box;
	}

	.pricer .euro{
		display: inline-block;
		font-size: 32px;
	}
		.pricer .euro .pricecomma{
			font-size: 26px;
		}

	.pricer .cent{
		display: inline-block;
		position:relative;
		top: -10px;
		left: -3px;
		font-size: 18px;
	}

	.pricer .euro.large{
		font-size: 42px;
	}
	.pricer .cent.large{
		top: -13px;
		left: -1px;
		font-size: 23px;
	}

	.pricer.teaser{
		height:60px;
	}

	.priceBlock  .pricer.teaser{
		height:38px;
		width: 115px;
	}

	.teaser{
		cursor: default !important;
	}

	.breadcrumbs{
		font-family: 'Roboto', sans-serif;
		font-size: 12px;
		font-weight: 500;
		line-height: 30px;
		margin-left: 10px;
	}

	.breadcrumbs .grijs{
		color: #999999;
	}

	.breadcrumbs ol, .breadcrumbs li{
		display:inline;
		margin: 0;
	}

/* ############################################## */
/* 2017 / 2018 ALGEMENE STYLES - BLOCKSTRUCTURE	  */
/* ############################################## */
.blockstructure_cell a{
	text-decoration: underline;
}
.blockstructure_cell a:hover{
	color: #999999;
	cursor: pointer;
}
.blockstructure_row div:nth-of-type(1){
	width: 200px;
	vertical-align: top;
}
.blockstructure_row #seo_text.readonly{
	background-color: #EEEEEE;
	color:#999999;
}
.blockstructure_row #seo_text{
	display: block;
	width: 100%;
	height: 100px;
	border: 1px solid #AAAAAA;
}
.blockstructure_table .seo_h1, .seo_h2{
	font-family: 'Roboto', sans-serif;
	font-size: 15px;
	color: #8CD50B;
	font-weight: 500;
	margin-top: 10px;
	text-transform: uppercase;
}
.seo_h2{
	margin-bottom:5px;
}
.blockstructure_table .seo_text{
	font-family: 'Roboto', sans-serif;
	font-size: 12px;
	font-weight: 500;
	line-height: 17px;
	text-align: justify;
}
.blockstructure_table .seo_text a{
	color: #008FD5;
}


/* ####################################### */
/* 2017 ALGEMENE STYLES	- ADMIN BLOCK	  */
/* ####################################### */
.adminblock{
	display: block;
	border: 1px solid #8CD50B;
}
	.adminblock .title{
		background-color: #8CD50B;
		color: #FFFFFF;
		font-weight: bolder;
		padding: 5px;
	}
	.adminblock .row{
		display: block;
		height: 25px;
	}
	.adminblock .row:nth-child(odd){
		background-color:#EEEEEE;
	}
		.adminblock .cell{
			display: inline-block;
			padding-left: 5px;
			height: 25px;
			line-height: 25px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.adminblock .cell.subtitle{
			display: inline-block;
			color: #8CD50B;
			font-weight: bolder;
		}
		.adminblock .cell.right{
			float: right;
			text-align:right;
			padding: 0px;
			margin-right: 5px;
		}
		.adminblock .cell img{
			vertical-align: middle;
		}

.admin_recycleicon{
	display: 	inline-block; 
	position: 	absolute; 
	right: 		0px; 
	top: 		-3px; 
	width: 		30px; 
	font-size: 	20px; 
	text-align:	center;
}
	.admin_recycleicon:hover{
		cursor: pointer;
		color: #00AA00;
	}

#cred_stats{
	display: 		inline-block;
	margin-top: 	50px;
}
	#cred_stats .cred_title{
		display: block;
		background-color: #008FD5;
		padding: 5px;
		font-weight: bolder;
		color: #FFF;
	}
	#cred_stats .cred_line{
		display: block;
	}
		#cred_stats .cred_line:nth-child(2){
			background-color: #AAA !important;
			color: #FFF;
		}
		#cred_stats .cred_line:nth-child(2n){
			background-color: #EEE;
		}
	#cred_stats .cred_line>div{
		display: inline-block;
		padding: 5px;
		text-align: center;
	}
		#cred_stats .cred_line>div:nth-child(1){
			width: 100px;
			text-align: left;
		}
		#cred_stats .cred_line>div:nth-child(2){
			width: 100px;
		}
		#cred_stats .cred_line>div:nth-child(3){
			width: 100px;
		}


/* ####################################### */
/* FDFV pages 				   */
/* ####################################### */
.fdfv_title{
	font-family: 'Roboto', sans-serif;
	font-size: 15px;
	color: #8CD50B;
	font-weight: 500;
	margin-top: 10px;
	text-transform: uppercase;
}
.fdfv_text{
	display: block;
	font-family: 'Roboto', sans-serif;
	font-size: 12px;
	font-weight: 500;
	line-height: 17px;
	color: #000000;
}
.fdfv_link {
	display: inline-block;
	font-family: 'Roboto', sans-serif;
	font-size: 12px;
	font-weight: 500;
	line-height: 17px;
	margin-left: 2px;
	color: #008FD5;
}
	.fdfv_link.back {
		display: block !important;
		margin-bottom: 20px;
		margin-left: 0px !important;
	}
	.fdfv_link.red{
		color: #FF0000 !important;
	}

.showimg{
	display: none;
	position: absolute;
	top: 150px;
	padding: 15px;
	width: 1000px;
	min-height: 100px;
	max-height: 600px;
	text-align:center;
	z-index: 501;
}
	.showimg .container{
		display: inline-block;
		text-align: right;
	}
	.showimg .container .imgpreload{
		display: none;
		width: 0px;
		height: 0px;
		overflow: hidden;
	}
		.showimg .container .imgpreload img{
			display: none;
			max-height: 600px;
		}
	.showimg .sluiten{
		position: relative;
		font-family: 'Roboto', sans-serif;
		font-size: 17px;
		font-weight: 700;
		margin-right: 10px;
		cursor: pointer;
	    top: 30px;
	    color: #4C4D4E;;
	    z-index: 600;
	}
		.showimg .sluiten .cross{
			display: inline-block;
			font-size: 20px;
			position: relative;
			top: -4px;
		}
		.showimg .sluiten .text{
			display: inline-block;
			margin-left: 10px;
			position: relative;
			top: -5px;
		}

	.showimg .showimgcontent{
		background-color: #FFFFFF;
		box-shadow: 3px 3px 25px rgba(0,0,0,0.6);
		border-radius: 10px;
		position: relative;
		text-align: center;
		padding: 50px;
		overflow: hidden;
		-webkit-transition: width 0.2s, height 0.2s;
		-moz-transition: width 0.2s, height 0.2s;
		transition: width 0.2s, height 0.2s;
	}
	.showimg .showimgcontent_img{
		display:inline-block;
		position: relative;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
		max-width: 100%;
		max-height: 100%;
		text-align:center;
		vertical-align: middle;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
		.showimg .showimgcontent_img img{
			max-height: 600px;
			vertical-align: middle;
		}

		/*
		.showimg .showimgcontent .img{
			position: absolute;
			left: 50%;
			padding-left: 20px;
			padding-right: 20px;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		*/

		.showimg .showimgcontent .nav{
			display: inline-block;
			position: absolute;
			top: 0px;
			width: 60px;
			height: 100%;
			vertical-align:middle;
			text-align:center;
			background-color: rgba(200,200,200,0.2);
			border-radius: 10px 0px 0px 10px;
			z-index: 502;
			-webkit-transition: all 0.5s;
			-moz-transition: all 0.5s;
			transition: all 0.5s;
			cursor: pointer;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
			.showimg .showimgcontent .nav img{
				vertical-align: middle;
				position: absolute;
				top:0;
				bottom:0;
				left: 22px;
				margin: auto;
				opacity: 0.5;
				-webkit-transition: all 0.5s;
				-moz-transition: all 0.5s;
				transition: all 0.5s;
			}
			.showimg .showimgcontent .nav.left{
				left: 0px;
				border-radius: 10px 0px 0px 10px;
			}
			.showimg .showimgcontent .nav.right{
				right: 0px;
				border-radius:  0px 10px 10px 0px;
			}

		.showimg .showimgcontent .nav:hover{
			background-color: rgba(200,200,200,0.8);
		}
		.showimg .showimgcontent .nav:hover img{
			opacity: 1;
		}

/* ####################################### */
/* 2017 SITE ADMIN							   */
/* ####################################### */
.sa{
	line-height: 30px;
}
.sa.title{
	font-size: 20px;
	font-weight: bolder;
	text-transform: uppercase;
	color: #8CD50B;
	margin-top: 25px;
}
.sa.title:nth-child(1){
	margin-top: 0px;
}
.sa.header{
	display: block;
	background-color:#8CD50B;
	color: #FFFFFF;
}
.sa.line{
	display: block;
	background-color:#FFFFFF;
}
.sa.line div, .sa.header div{
	display:inline-block;
}
.sa.line div:nth-child(1), .sa.header div:nth-child(1){
	margin-left: 5px;
}
.sa.line:nth-child(2n){
	background-color:#EEEEEE;
}
.sa.line input{
	border-radius: 2px;
}


/* ####################################### */
/* 2017 KIESCAT							   */
/* ####################################### */
.kiescat{
	display: none;
	width: 1000px;
	position: fixed;
	top: 100px;
	z-index: 501;
	background-color: #EEEEEE;
}
	.kiescat.direct{
		width: 200px !important;
	}
.kiescat.closed{
	top: 70px;
}
	.kiescat .menu{
		display: inline-block;
		width: 200px;
		background-color:#EEEEEE;
		vertical-align: top;
	}
		.kiescat .menu .item{
			display: block;
			line-height: 30px;
			height: 30px;
			background-color: transparent;
			padding-left: 10px;
			padding-right: 5px;
			cursor: pointer;
			box-sizing: border-box;
			border: 1px solid transparent;
		}
		.kiescat .menu .item:hover{
			background-color:#F6F6F6;
			border-top: 1px solid #DDDDDD;
			border-bottom: 1px solid #DDDDDD;
		}
		.kiescat .menu .item.active{
			background-color:#FFFFFF;
		}

		.kiescat .menu .spacer{
			display: block;
			height: 1px;
			width: 180px;
			background-color:#CECECE;
			margin-left: 10px;
			margin-top: 12px;
			margin-bottom: 11px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.kiescat .menu .title{
			display: block;
			line-height: 30px;
			color: #008FD5;
			font-weight:bolder;
			padding-left: 10px;
			padding-right: 5px;
			box-sizing: border-box;
			border: 1px solid transparent;
		}

	.kiescat .content{
		display: inline-block;
		width: 800px;
		min-height: 400px;
		max-height: 80vh;
		overflow-y: auto;
		background-color:#FFFFFF;
		padding-bottom: 20px;
	}

	.nav_column{
		display: inline-block;
		width: 180px;
		vertical-align: top;
		margin-left: 10px;
	}
		.nav_column .block{
			display: block;
			width: 180px;
			margin-left: auto;
			margin-right: auto;
			font-family: 'Roboto', sans-serif;
			margin-bottom: 20px;
		}

		.nav_column .title{
			font-weight: 900;
			font-size: 14px;
			color: #8CD50B;
			line-height: 20px;
			margin-top: 10px;
			text-decoration: none;
		}
		.nav_column .title:hover{
			text-decoration: underline;
			cursor: pointer;
		}

		.nav_column .item{
			font-weight: 500;
			font-size: 12px;
			color: #2B2B2B;
			line-height: 20px;
			text-decoration: none;
		}
		.nav_column .item:hover{
			text-decoration: underline;
			cursor: pointer;
		}

		.nav_column .meer{
			font-weight: 700;
			font-size: 12px;
			color: #2B2B2B;
			line-height: 20px;
		}
		.nav_column .meer:hover{
			cursor: pointer;
			color: #8CD50B;
		}

	.nav_column	.ismore_limitheight{
		max-height: 0px;
		overflow-y: hidden;
		-webkit-transition: all 0.6s;
		-moz-transition: all 0.6s;
		transition: all 0.6s;
	}



/* ####################################### */
/* 2017 ZOEKRESULT						   */
/* ####################################### */
.zoekresult{
	display: none;
	width: 1000px;
	position: fixed;
	top: 100px;
	left: 50%;
	z-index: 501;
	background-color: #FFFFFF;
	max-height: calc(90vh - 60px);
	overflow-y: auto;
	/*-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	transition: all 0.5s;*/
	-webkit-transform: translateZ(0);
	transform: translateX(-50%);
	-webkit-transform: translateX(-50%);
}
	.zoekresult.autocomplete{
		width: 600px;
	}

.zoekresult::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}

.zoekresult::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

.zoekresult::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}

.zoekresult.closed{
	top: 70px;
}

	.zoekresult .zoektitelbalk{
		display:block;
		line-height: 40px;
		text-align: center;
		font-family: 'Roboto', sans-serif;
		font-size: 15px;
		font-weight: 500;
		background-color: #8CD50B;
		color: #FFFFFF;
	}
	.zoekresult .zoektitelbalk img{
		vertical-align:middle;
		position: relative;
		top: -2px;
	}

		.zoekresult .zoektitelbalk .zoeknav{
			display: inline-block;
			width: 75px;
			text-align: center;
		}
			.zoekresult .zoektitelbalk .zoeknav .nav.isdisabled{
				opacity: 0.5;
			}

		.zoekresult .zoektitelbalk .zoeknav.active:hover{
			background-color: rgba(255,255,255,0.2)
		}
		.zoekresult .zoektitelbalk .zoeknav.active{
			cursor: pointer;
		}

	.zoekresult .zoektitelbalk .paginfo{
		display: inline-block;
		min-width: 200px;
		text-align:center;
	}

	.zoekresult .zoekitem{
		display:block;
		position: relative;
		margin-left: 10px;
		margin-top: 10px;
		margin-bottom: 10px;
	}

		.zoekitem .breadcrumbs{
			display: inline-block;
			line-height: 15px;
			font-family: arial;
			font-size: 11px;
			color: #777777;
		}
		.zoekitem .breadcrumbs:hover{
			text-decoration: underline;
		}
			.zoekitem .breadcrumbs:first-child{
				margin-left: 0px;
			}

		.zoekitem .grijs{
			position: relative;
			top: 1px;
			color: #777777;
		}

		.zoekitem .img{
			display: inline-block;
			width: 70px;
			vertical-align: top;
			height: 60px;
		}
			.zoekitem .img img{
				width: 60px;
				height: 60px;
			}

		.zoekitem .prodinfo{
			display: inline-block;
			max-width: 450px;
			vertical-align: top;
			font-family: 'Roboto', sans-serif;
			font-size: 13px;
			font-weight: 500;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}

			.zoekitem .prodinfo .voorraad{
				font-family: 'Arial', sans-serif;
				font-size: 11px;
				font-weight: 400;
				line-height: 15px;
				margin-top: 6px;
				color: #777777;
			}

			.zoekitem .prodinfo .naam{
				font-weight: 500;
				line-height: 25px;
				position: relative;
				top: 3px;
			}
			.zoekitem .prodinfo .naam:hover{
				text-decoration: underline;
			}

		.zoekitem .zoekarrow{
			display: inline-block;
			font-size: 40px;
			margin-left: 30px;
			margin-right: 15px;
			-ms-transform: rotate(200deg);
			-webkit-transform: rotate(200deg);
			transform: rotate(200deg);
			vertical-align: top;
			line-height: 30px;
			cursor: pointer;
		}
		.zoekitem .zoekadvies{
			display: inline-block;
			cursor: pointer;
			line-height: 150%;
		}

	.zoekcatcontainer{
		display: block;
		margin-left:10px;
		margin-right: 10px;
	}

		.zoekcat{
			display: inline-block;
			margin-left: 0px;
			margin-top: 10px;
			height: 60px;
			background-color: #EEEEEE;
			cursor: pointer;
		}
		.zoekcat:first-child{
			margin-left: 0px;
		}

		.zoekcat25{
			display:inline-block;
			width: 25%;
		}

			.zoekcat .img{
				display: inline-block;
				width: 60px;
				height: 60px;
				background-position: center center;
				background-repeat: no-repeat;
				background-size: 90px 90px;
				vertical-align: middle;
			}
			.zoekcat .titel{
				display: inline-block;
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
				font-weight: 500;
				line-height: 60px;
				vertical-align: middle;
				padding-left: 5px;
				padding-right: 5px;

				width: 160px;
				overflow:hidden;
				text-overflow: ellipsis;
				white-space: nowrap;

			}
			.zoekcat:hover .titel{
				background-color: #8CD50B;
				color: #FFFFFF;
			}

	.zoekresult .navidfilter{
		float: left;
		position: absolute;
		top: 6px;
		left: 10px;
		padding: 4px;
	}


/* ####################################### */
/* 2018 NAV PRODUCTLIST 			   */
/* ####################################### */
	#navigation_products{
		display: none;
		background-color: #FFFFFF;
	}
	#navigation_products.closed{
		top: 70px;
	}

		#navigation_products .prodListtitelbalk{
			display:block;
			line-height: 40px;
			text-align: center;
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
			font-weight: 500;
			background-color: #8CD50B;
			color: #FFFFFF;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		#navigation_products .prodListtitelbalk img{
			vertical-align:middle;
			position: relative;
			top: -2px;
		}

			#navigation_products .prodListtitelbalk .prodListnav{
				display: inline-block;
				width: 75px;
				text-align: center;
			}
				#navigation_products .prodListtitelbalk .prodListnav .nav.isdisabled{
					opacity: 0.5;
				}

			#navigation_products .prodListtitelbalk .prodListnav.active:hover{
				background-color: rgba(255,255,255,0.2)
			}
			#navigation_products .prodListtitelbalk .prodListnav.active{
				cursor: pointer;
			}

		#navigation_products .prodListtitelbalk .paginfo{
			display: inline-block;
			min-width: 200px;
			text-align:center;
		}

		#navigation_products .navProductListitem{
			display:block;
			margin-left: 10px;
			margin-top: 10px;
			margin-bottom: 10px;
			position: relative;
		}

			.navProductListitem .breadcrumbs{
				display: inline-block;
				line-height: 15px;
				font-family: arial;
				font-size: 11px;
				color: #777777;
			}
			.navProductListitem .breadcrumbs:hover{
				text-decoration: underline;
			}
				.navProductListitem .breadcrumbs:first-child{
					margin-left: 0px;
				}

			.navProductListitem .grijs{
				position: relative;
				top: 1px;
				color: #777777;
			}

			.navProductListitem .img{
				display: inline-block;
				width: 70px;
				vertical-align: top;
				height: 60px;
			}
				.navProductListitem .img img{
					width: 60px;
					height: 60px;
				}

			.navProductListitem .prodinfo{
				display: inline-block;
				width: 500px;
				vertical-align: top;
				font-family: 'Roboto', sans-serif;
				font-size: 13px;
				font-weight: 500;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}

				.navProductListitem .prodinfo .voorraad{
					font-family: 'Arial', sans-serif;
					font-size: 11px;
					font-weight: 400;
					line-height: 15px;
					margin-top: 6px;
					color: #777777;
				}

				.navProductListitem .prodinfo .naam{
					font-weight: 500;
					line-height: 25px;
					position: relative;
					top: 3px;
				}
				.navProductListitem .prodinfo .naam:hover{
					text-decoration: underline;
				}

			.navProductListitem .shopinfo{
				display: table;
				float:right;
				height: 60px;
			}

			.navProductListitem .prijs{
				display: table-cell;
				vertical-align: middle;
				padding-right: 5px;
			}
			.navProductListitem .winkelmand{
				display: table-cell;
				vertical-align: middle;
			}

			.navProductListitem .shopbutton{
				display:inline-block;
				width: 38px;
				height: 38px;
				float: right;
				margin-right: 5px;
				background-color:  #008FD5;
				background-image: url('/templates/basic/images/icoon_winkelwagen.png');
				background-position: center center;
				background-repeat: no-repeat;
				cursor: pointer;
			}

			.navProductListitem .zoekarrow{
				display: inline-block;
				font-size: 40px;
				margin-left: 30px;
				margin-right: 15px;
				-ms-transform: rotate(200deg);
				-webkit-transform: rotate(200deg);
				transform: rotate(200deg);
				vertical-align: top;
				line-height: 30px;
				cursor: pointer;
			}
			.navProductListitem .zoekadvies{
				display: inline-block;
				cursor: pointer;
				line-height: 150%;
			}

		.zoekresult .navidfilter{
			float: left;
			position: absolute;
			top: 6px;
			left: 10px;
			padding: 4px;
		}

	.prodListfilteractief{
		display: inline-block;
		margin-right: 10px;
		margin-bottom: 10px;
		background-color: #8CD50B;
		border: 1px solid #8CD50B;
		margin-top: 10px;
		cursor: pointer;
	}
		.prodListfilteractief .naam{
			display: inline-block;
			color: #FFFFFF;
			margin-left: 6px;
			margin-right: 6px;
		}
		.prodListfilteractief .sluiten{
			display: inline-block;
			background-color: #FFFFFF;
			color: #8CD50B;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
		}

	.prodListfilteractief:hover{
		background-color: #FFFFFF;
	}
		.prodListfilteractief:hover .naam{
			color: #8CD50B;
		}
		.prodListfilteractief:hover .sluiten{
			background-color: #8CD50B;
			color: #FFFFFF;
		}

.merkcontainer{
	margin-left: 10px;
	margin-top: 30px;
	position:relative;
}
	.merkheader{
		font-size:18px;
		margin-bottom: 15px;
	}

		.merkheaderanchor{
			margin-right:30px;
			font-family: 'Roboto', sans-serif;
		}

	.merkwrapper{
		font-size:14px;
		margin-bottom: 15px;
		margin-top:15px;
		line-height: 200%;
	}

		.merkanchor, .wordcloudanchor{
			position:relative;
			top:-100px;
			display:block;
		}

		.merkRow{
			display: inline-block;
			vertical-align:top;
			width:100%;
			column-count: 4;
  			column-fill:auto;
		}

			.merkRow a{
			    display: inline-block;
			    width: 100%;
			    white-space: nowrap;
			    overflow: hidden;
			    text-overflow: ellipsis;
			}

		.merkwrapper h3{
			color: #4C4D4E;
		}

/* ####################################### */
/* 2017 LOGINBOX						   */
/* ####################################### */
.loginbox{
	display: none;
	width: 1000px;
	position: absolute;
	top: 100px;
	z-index: 402;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	transition: all 0.5s;
}
.loginbox.closed{
	top: 70px;
}
	.loginbox .container{
		display: block;
		position: relative;
	}
		.loginbox .container .content_left{
			display: inline-block;
			float: left;
			width: 700px;
			min-height: 220px;
			cursor: pointer;
		}
		.loginbox .container .content{
			display: inline-block;
			min-height: 150px;
			width: 280px;
			float: right;
			padding: 10px;
			background-color: #FFFFFF;
		}

		.loginbox .titel{
			display: block;
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
			font-weight: 700;
			margin-bottom: 5px;
			position: relative;
		}
			.loginbox .titel .close{
				display: inline-block;
				position: absolute;
				width: 50px;
				right: 0px;
				cursor: pointer;
				text-align:right;
			}

		.loginbox .loginblock{
			display: none;
		}

		.loginbox .logoutblock{
			display: none;
		}

		.loginbox .menuitem{
			display: inline-block;
			line-height: 30px;
			font-family: 'Roboto', sans-serif;
			font-size: 13px;
			font-weight: 500;
		}
		.loginbox .menuitem:hover{
			text-decoration: underline;
		}

		.loginbox .logininfo{
			display: block;
			height: 0px;
			overflow: hidden;
			font-family: 'Roboto', sans-serif;
			font-size: 13px;
			font-weight: 500;
			color: #D90000;
			-webkit-transition: all 0.5s;
			-moz-transition: all 0.5s;
			transition: all 0.5s;
		}

		.loginbox .titel #sessienaam{
			display: inline-block;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			width: 220px;
		}

		.loginbox .inputtitle{
			display: block;
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
			font-weight: 500;
			margin-bottom: 5px;
			margin-top: 10px;
		}
		.loginbox input{
			border: 1px solid #999999;
			width: 90%;
		}
		.loginbox input[type=button]{
			width: 40%;
		}

		.loginbox .passwordlink{
			font-family: 'Roboto', sans-serif;
			font-size: 12px;
			font-weight: 300;
			color: #008FD5;
			margin-top: 10px;
			margin-bottom: 10px;
			cursor: pointer;
		}
		.loginbox .passwordlink:hover{
			text-decoration: underline;
		}




/* ####################################### */
/* 2017 SUBHEADER						   */
/* ####################################### */
.subheader{
	display: block;
	height: 95px;
	font-family: 'Roboto', sans-serif;
	font-size: 15px;
	color: #808080;
	position: relative;
}

	.subheader .headerIconImg{
		vertical-align:middle;
		position: relative;
		top: -2px;
	}

	.subheader .logo{
		display: inline-block;
		position: absolute;
		bottom: 15px;
		width: 200px;
		text-align: center;
	}

	.subheader .headerBlocks{
		display: inline-block;
		vertical-align:top;
		float: right;
		margin-right: 10px;
		height: 80px;
		position: relative;
	}
		.subheader .headerBlocks .headerBlock{
			position: relative;
			top:48px;
			float:left;
			margin-left:65px;
			display: table;
		}

		.subheader .headerBlocks .headerLink{
			display: inline-block;
			font-weight: 700;
			line-height: 15px;
			display: table-cell;
			vertical-align: middle;
			padding-left: 10px;
			color: #808080;
		}
		.subheader .headerBlocks .headerIcon{
			display: inline-block;
			display: table-cell;
			vertical-align: middle;
			position: relative;
		}
		.subheader .headerBlocks .headerIcon.stars{
			width: 50px;
		}
		.subheader .headerBlocks .headerIcon .star1{
			position: absolute;
			left: 0px;
			top: 0px;
		}
		.subheader .headerBlocks .headerIcon .star2{
			position: absolute;
			left: 18px;
			top: 0px;
		}
		.subheader .headerBlocks .headerIcon .star3{
			position: absolute;
			left: 36px;
			top: 0px;
		}
		.subheader .headerBlocks .headerIcon .star4{
			position: absolute;
			left: 9px;
			top: 13px;
		}
		.subheader .headerBlocks .headerIcon .star5{
			position: absolute;
			left: 27px;
			top: 13px;
		}



/* ####################################### */
/* 2017 MAIN							   */
/* ####################################### */
.main_container{
	min-height: calc(100% - 304px); /* 165 */
	position: relative;
}

main{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 1000px;
	min-height: calc(100% - 150px);

	background-color: #FFFFFF;
	padding-bottom:10px;
}

main:before {
	height: 100px;
	content: "";
	display: block;
}

	main .overlay{
		display: none;
		position: fixed;
		left: 0px;
		top: 0px;
		min-width: 100%;
		min-height: 120%;
		background-color: rgba(0,0,0,0.0);
		z-index: 400;
		cursor: pointer;
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		transition: all 0.5s;
	}


/* ####################################### */
/* 2017 FRONTPAGE						   */
/* ####################################### */
.frontpage{
	display: block;
	margin-top: 10px;
}

	.frontpage .menu{
		display: inline-block;
		width: 200px;
		font-family: 'Roboto', sans-serif;
		font-size: 15px;
		vertical-align: top;
		margin-bottom: 30px;
	}
		.frontpage .menu .container{
			margin-top: -9px;
		}
		.frontpage .menu .item{
			display: block;
			padding-left: 15px;
			line-height: 30px;
			font-weight: 500;
		}
		.frontpage .menu .item:hover{
			text-decoration: underline;
			cursor: pointer;
		}
		.frontpage .menu .line{
			display: block;
			margin-right:15px;
			height: 1px;
			background-color: #B3B3B3;
			margin-top: 5px;
			margin-bottom: 5px;
		}

	.frontpage .heroimage{
		width: 1000px;
		min-height: 500px;
		background-position: center top;
		background-repeat: no-repeat;
		overflow: hidden;
		position: relative;
		margin-bottom: 30px;
		background-size: cover;
	}

	.frontpage .heroimage .blokkenheader{
		display: block;
		position: absolute;
		bottom: 0px;
	}




/* ####################################### */
/* 2017 NAVIGATIE						   */
/* ####################################### */

.navigation .menu, .zoek_results_contailer .menu{
	display: inline-block;
	width: 200px;
	vertical-align: top;
	margin-top: 10px;
	margin-bottom: 30px;
}

.navigation .content_list{
	display: inline-block;
	width: 800px;
	vertical-align: top;
	margin-bottom: 30px;
}

.content_list #content_list_content{
	width:100%;
	display:flex;
	flex-wrap:wrap;
}

.navigation .content_block{
	width: 1000px;
	vertical-align: top;
	margin-top: 10px;
	margin-bottom: 30px;
	position: relative;
}

.navigation .content_block .navblock{
	width: 240px;
	height: 240px;
	vertical-align: top;
	display: inline-block;
	margin-bottom: 10px;
	position: relative;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
}

.navigation .content_block .navblock_v2{
	width: 240px;
	height: 240px;
	vertical-align: top;
	display: inline-block;
	margin-bottom: 13px;
	position: relative;
	margin-right: 13px;
}
.navigation .content_block .navblock_v2:nth-child(4n){
	margin-right: 0px;
}

.navigation .content_block .navblock_v2 .blockimg_v2{
	position: absolute;
	top: 0px;
	left: 0px;
	width: 240px;
	height: 240px;
}

.navigation .content_block .navblock_v2 h2{
	display: table;
	position: absolute;
	bottom: 0px;
	height: 40px;
	width: 240px;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	font-weight: 500;
	background-color: #8CD50B;
	color: #FFFFFF;
}

.navigation .content_block a{
	margin-left: 13px;
}

	.navigation .content_block .navblock.moveselected, .navigation .content_block .navblock_v2.moveselected{
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-shadow: inset 0px 0px 0px #00FF00;
		-webkit-transition: all 0.2s;
		-moz-transition: all 0.2s;
		transition: all 0.2s;
	}
	.navigation .content_block .navblock.moveselected.on, .navigation .content_block .navblock_v2.moveselected.on{
		box-shadow: inset 0px 0px 100px #00FF00;
	}

.navigation .content_block a:nth-child(4n){
	margin-left: 0px;
	float:right;
}
.navigation .content_block a:nth-child(4n+1){
	margin-left: 0px;
}

.navigation .content_block .title{
	display: table-cell;
	width: 100%;
	background-color: #8CD50B;
	color: #FFFFFF;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	font-weight: 500;
	height: 20px;
	line-height: 20px;
	vertical-align: middle;
	text-align:center;
	text-transform: uppercase;
}
	.navigation .content_block .title.xxl{
		white-space: normal !important;
		line-height: 20px !important;
	}

.navigation .content_block .edit{
	background-color: #008FD5;
	width: 35px;
	height: 35px;
	text-align: center;
	border-radius: 50%;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	font-weight: 500;
	position: absolute;
	right: 10px;
	top: 10px;
	cursor: pointer;
}
	.navigation .content_block .edit img{
		position: relative;
		top: 11px;
		left: 2px;
	}

.navigation .content_block .move{
	background-color: #008FD5;
	width: 35px;
	height: 35px;
	text-align: center;
	border-radius: 50%;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	font-weight: 500;
	position: absolute;
	right: 50px;
	top: 10px;
	cursor: pointer;
}
	.navigation .content_block .move img{
		position: relative;
		top: 11px;
		left: 0px;
	}

.navigation .content_block .info{
	background-color: #008FD5;
	height: 25px;
	line-height: 25px;
	padding: 0px 7px 0px 5px;
	border-radius: 0px 0px 10px 0px;
	font-weight: 500;
	position: absolute;
	left: 0px;
	top: 0px;
	color: #FFFFFF;
}


/* ####################################### */
/* 2017 NAVIGATIE FILTERS				   */
/* ####################################### */
	.menu .filter .title{
		display: block;
		font-family: 'Roboto', sans-serif;
		font-size: 12px;
		font-weight: 500;
		margin-right:5px;
		margin-left: 15px;
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.menu .filter .filtercontainer{
		display: block;
	}
	.menu .filter .filtercontainer.hidden{
		display: none;
	}
		.menu .filter .filtercontainer label{
			cursor: pointer;
		}

	.menu .filter .filtercontainer:first-child .title{
		margin-top: 0px;
	}

	.menu .filter .option{
		display: block;
		font-family: 'arial', sans-serif;
		font-size: 11px;
		font-weight: 400;
		margin-right:5px;
		margin-left: 15px;
		/*margin-bottom: 10px;*/
		margin-bottom: 8px;
		cursor: pointer;
		position: relative;
	}

	.menu .filter .option > *{
		display:inline-block;
		vertical-align: top;
	}

	.menu .filter .option > span{
		margin-left: 8px;
	}

	.menu .filter .option.hidden{
		display: none;
	}

	.menu .filter .option.more{
		margin-left: 35px;
		font-weight: 700;
		margin-bottom: 3px;
	}
	.menu .filter .option .largefont{
		font-size: 16px;
		position: absolute;
		top: -4px;
		margin-left: 2px;
	}

	.menu .filter .title label{
		position: relative;
		top: -2px;
		left: 5px;
	}

	.menu .filter .option label{
		position: relative;
		left: 5px;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	
		.menu .filter .option > label{
			/*white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			max-width:120px;*/
			max-width:150px;
		}

		.menu .filter .option .label_aantal{
			color: #444444;
		}
		.menu .filter .option .label_aantal_gray{
			color: #BBBBBB;
		}
		.menu .filter .option .label_aantal.gray{
			color: #BBBBBB;
		}

	.menu .filter .line{
		display: block;
		margin-right:15px;
		height: 1px;
		background-color: #B3B3B3;
		margin: 5px 10px 5px 10px;
	}

	.menu .filter .filteroptiescontainer{
		max-height: 185px;
		overflow: hidden;
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		transition: all 0.5s;
	}

	.menu .filter .filteroptiescontainer.nomore{
		height: auto;
		overflow: visible;
	}

	.filteractief{
		display: inline-block;
		margin-left: 10px;
		background-color: #8CD50B;
		border: 1px solid #8CD50B;
		margin-top: 10px;
		cursor: pointer;
	}
		.filteractief .naam{
			display: inline-block;
			color: #FFFFFF;
			margin-left: 6px;
			margin-right: 6px;
		}
		.filteractief .sluiten{
			display: inline-block;
			background-color: #FFFFFF;
			color: #8CD50B;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
		}

	.filteractief:hover{
		background-color: #FFFFFF;
	}
		.filteractief:hover .naam{
			color: #8CD50B;
		}
		.filteractief:hover .sluiten{
			background-color: #8CD50B;
			color: #FFFFFF;
		}

	#list_bottomheader_text{
		display: block;
		margin-top: 25px;
		margin-left: 10px;
	}
		#list_bottomheader_text .title{
			font-family: 'Roboto', sans-serif;
			font-size: 18px;
			font-weight: 500;
			color: #8CD50B;
		}

	#list_bottomheader .to-top{
		display: inline-block;
		float: right;
		position: relative;
		top: 20px;
	}
		#list_bottomheader .to-top .img{
			display: inline-block;
			width: 25px;
			vertical-align: middle;
		}
			#list_bottomheader .to-top .img img{
				vertical-align: middle;
			}
		#list_bottomheader .to-top .text{
			display: inline-block;
			vertical-align: middle;
		}

/* ####################################### */
/* 2017 SITEMAP							   */
/* ####################################### */
.sitemap_title{
	margin-top: 40px;
	margin-bottom: 5px;
	font-size: 30px;
}
.teksten ul{
	margin-left: 30px;
}
.sitemap_prodvan{
	margin-left: 25px;
	color: #444499;
}
.sitemap_sublevel{
	font-weight:600;
	line-height: 25px;
}
.teksten h1{
	font-size: 40px;
	line-height: 30px;
	margin-bottom: 10px;
}
.teksten h3{
	line-height: 30px;
}
	.teksten .link{
		text-decoration: underline;
		color: #008FD5;
	}
.teksten .sitemapsubheader{
	font-size: 25px;
	color:#008FD5;
}

/* ####################################### */
/* 2017 PRODUCT DETAILPAGE				   */
/* ####################################### */

.prodnamecontainer{
	position:relative;
}

.product_detail{
	display: block;
	position: relative;
}
	.product_detail .foutmelden{
		display: inline-block;
		position: absolute;
		right: 10px;
		top: 40px;
		font-family: 'Arial', sans-serif;
		font-size: 12px;
		font-weight: 400;
		color: #999999;
		cursor: pointer;
	}
		.product_detail .foutmelden:hover{
			text-decoration: underline;
		}
	.product_detail	.foutmelden img{
		position: relative;
		top: 1px;
		right: 3px;
	}

	.prodnamecontainer .foutmelden{
		top:10px;
	}

	.prodnamecontainer .wlheart{
		position:	absolute;
		top:		13px;
		right: 		162px;
	}

	.prodnamecontainer .wlheartAmount{
		position: 				absolute;
		right: 					187px;
		top: 					17px;
		font-size: 				11px;
		color: 					#999;
		font-family: 			arial, verdana, sans-serif;
		font-weight: 			400;
		-webkit-user-select: 	none;
		user-select: 			none;
	}

	.foutmelden_content{
		display: block;
		margin: 10px;
		text-align: left;
	}
		.foutmelden_content .title{
			display: block;
			font-family: 'Roboto', sans-serif;
			font-size: 15px;
			font-weight: 700;
			color: #8CD50B;
			text-transform: uppercase;
		}

	.product_detail .breadcrumbs{
		width: 980px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	.product_detail .title{
		display: block;
		width: 800px;
		font-family: 'Roboto', sans-serif;
		font-size: 20px;
		font-weight: 700;
		/*white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;*/
		padding: 6px 5px 0px 10px;
	}

	.product_detail .subtitle{
		display: block;
		font-family: 'Arial', sans-serif;
		font-size: 12px;
		font-weight: 400;
		padding: 5px 5px 20px 10px;
		position: relative;
	}
	.product_detail_redirect{
		background-color: #FFF; 
		color: #008FD5; 
		font-size: 15px; 
		cursor: pointer; 
		width: 170px; 
		height: 50px; 
		line-height: 50px; 
		text-align: center;
		text-transform: uppercase;
		font-weight: 500;
		font-family: 'Roboto', sans-serif;
		vertical-align: top;
		border: 1px solid #008FD5;
		box-sizing: border-box;
		margin-bottom: 5px;
	}
		.product_detail_redirect:hover{
			background-color: #008FD5;
			color: #FFF;
		}
		.product_detail_redirect .redirect_icon{
			font-size: 30px;
			vertical-align: top;
		}


	.product_detail .col_left{
		display: inline-block;
		width: 300px;
		vertical-align: top;
	}

	.product_detail .productimg{
		display: block;
		width: 290px;
		height: 290px;
		margin-left: 10px;
		/*background-repeat: no-repeat;
		background-position: center center;*/
		cursor: pointer;
		position: relative;
	}

	.product_detail #productimg{
		width:290px;
	}

	.product_detail .thumbs{
		display: block;
		margin-left: 10px;
		width: 290px;
		margin-bottom: 30px;
	}

	.product_detail .productthumb{
		display: inline-block;
		width: 90px;
		height: 90px;
		/*background-repeat: no-repeat;
		background-position: center center;
		background-size: 80px 80px;*/
		padding:5px;
		margin-top: 6px;
		margin-right: 6px;
		box-sizing: border-box;
		border: 1px solid #B3B3B3;
		cursor: pointer;
	}
	.product_detail .productthumb:nth-child(3n){
		margin-right: 0px;
	}

	.product_detail .infoblock{
		display: block;
		margin-bottom: 30px;
	}

	.product_detail .infoblock .infoblocktitle{
		display: block;
		font-family: 'Roboto', sans-serif;
		font-size: 15px;
		font-weight: 700;
		color: #8CD50B;
		text-transform: uppercase;
		margin: 0px 0px 6px 10px;
	}

	.product_detail .infoblock .content{
		display: block;
		font-family: arial, verdana, sans-serif;
		color: #444444;
		font-size: 12px;
		margin-left: 10px;
		margin-top: 13px;
	}
	.product_detail .infoblock .content.nomargin{
		margin-left: 0px;
	}

	/* ############## */
	/* BUNDELS        */
	.product_detail .infoblock .bundel{
		display: block;
		margin-top: 20px;
		margin-bottom: 20px;
		margin-left: 10px;
	}
	.product_detail .infoblock .bundel.actiebundel{
		margin-top: 10px;
		margin-bottom: 10px;
	}

	.product_detail .infoblock .bundel.actiebundel .breadcrumbs{
		margin-top: 7px;
		line-height: 25px;
	}

	.product_detail .infoblock .bundel.actiebundel .breadcrumbs a{
		color: #808080;
	}
		.product_detail .infoblock .bundel .bundel_left{
			display: inline-block;
			vertical-align: top;
		}
			.product_detail .infoblock .prodimg{
				display: inline-block;
			}
				.product_detail .infoblock .prodimg img{
					max-width: 60px;
					max-height: 60px;
				}
			.product_detail .infoblock .prodimg.extra{
				margin-right: 30px;
			}
				.product_detail .infoblock .prodimg.extra img{
					max-width: 60px;
					max-height: 60px;
				}
			.product_detail .infoblock .prodimg_plus{
				display: inline-block;
				width: 30px;
				height: 30px;
				background-color: #008FD5;
				border-radius: 50%;
				line-height: 30px;
				text-align: center;
				color: #FFFFFF;
				position: relative;
				top: 15px;
				vertical-align: top;
				font-family: 'Roboto', sans-serif;
				font-size: 17px;
				font-weight: 700;
			}

			.product_detail .infoblock .bundel_artname{
				display: inline-block;
				margin-left: 10px;
				font-family: arial, verdana, sans-serif;
				font-size: 12px;
			}

		.product_detail .infoblock .bundel_right{
			display: inline-block;
			width: 180px;
			float: right;
		}

			.product_detail .infoblock .pricerspace{
				display: inline-block;
				width: 115px;
				height: 38px;
				vertical-align:top;
			}

			.product_detail .infoblock .pricerspace .pricer{
				width: 120px !important;
			}

			.product_detail .infoblock .vanvoor{
				display: block;
				height: 20px;
				max-width: 80px;
				font-family: Roboto, 'Arial', sans-serif;
				font-size: 18px;
				font-weight: 400;
				color: #999999;
				vertical-align: top;
				position: relative;
				top: -8px;
				margin-right: 5px;
			}

				.product_detail .infoblock .vanvoor .prijs{
					display: block;
					width: 100%;
					position: absolute;
					top: 6px;
					text-align:center;
				}
				.product_detail .infoblock .vanvoor .line{
					display: block;
					width: 100%;
					height: 100%;
					position: absolute;
					top: 14px;
					left: 0px;
					border-bottom: 1px solid #4C4D4E;
					-webkit-transform: rotate(170deg);
					transform: rotate(170deg);
				}

			.product_detail .infoblock .shopbutton{
				display: inline-block;
				width: 45px;
				height: 38px;
				background-color:  #008FD5;
				cursor: pointer;
				vertical-align:top;
				float: right;
				margin-right: 10px;
			}

				.product_detail .infoblock .shopbutton .img{
					display: inline-block;
					width: 45px;
					height: 38px;
					background-image: url('/templates/basic/images/icoon_winkelwagen.png');
					background-position: center center;
					background-repeat: no-repeat;
					vertical-align: top;
				}

			.product_detail .infoblock .levertijd{
				display: block;
				font-family: 'Arial', sans-serif;
				font-size: 12px;
				margin-top: 5px;
			}

		.product_detail .infoblock .bundel_titel{
			font-family: arial, verdana, sans-serif;
			color: #444444;
			font-size: 12px;
			white-space: nowrap;
			overflow: hidden !important;
			text-overflow: ellipsis;
		}
		.product_detail .infoblock .bundel_titel.nohover:hover{
			text-decoration: none;
			cursor: default;
		}
		.product_detail .infoblock .bundel_titel:hover{
			text-decoration: underline;
			cursor: pointer;
		}

		.product_detail .infoblock .related{
			display: inline-block;
			width: 335px;
			padding: 10px;
			box-sizing: border-box;
			border-right: 1px solid #B3B3B3;
			border-top: 1px solid #B3B3B3;
		}
		.product_detail .infoblock .related:nth-child(2n){
			border-right: 0px;
		}
		.product_detail .infoblock .related:nth-child(1), .product_detail .infoblock .related:nth-child(2){
			border-top: 0px;
		}

		.product_detail .infoblock .related_right{
			display: inline-block;
			vertical-align: top;
			float: right;
		}

		.product_detail .infoblock .related_right .shopbutton{
			margin-left: 10px;
			margin-right: 0px;
		}

		.product_detail .infoblock .related:nth-child(2n){
			float: right;
		}
			.product_detail .infoblock .related .container{
				display:block;
			}

		.product_detail .staffelkorting_button{
			display: block;
			position: relative;
			height:50px;
			cursor:pointer;
			margin-top:10px;
			border: 1px solid #000;
			margin-right:10px;
			line-height: 50px;
		}
			.product_detail .staffelkorting_button .icon{
				position: absolute;
				display: inline-block;
				width: 30px;
				height: 50px;
				font-family: 'Roboto', sans-serif;
				font-size: 22px;
				line-height: 50px;
				text-align:center;
				font-weight:bolder;
				color: #8CD50B;
			}
			.product_detail .staffelkorting_button .label{
				position: absolute;
				display: inline-block;
				height: 50px;
				line-height: 50px;
				left: 30px;
				font-family: 'Roboto', sans-serif;
				font-size: 15px;
				font-weight:bolder;
			}
		.staffelkorting_details{
			display: block;
			position: relative;
			margin-right:10px;
			font-size: 13px;
			font-family: 'Roboto', sans-serif;
			overflow-y: hidden;
			margin-bottom:10px;
			transition: max-height 0.5s;
			max-height: 0px;
		}

		#staffelkorting_container{
			padding-bottom: 10px;
			padding-top: 5px;
			border: 1px solid #000;
			border-top: 0px;
		}
			.staffelkorting_details .b{
				font-weight: bolder;
			}
			.staffelkorting_details .staffel_line{
				display: block;
				line-height: 20px;
			}
			.staffelkorting_details .staffel_footer .staffel_line{
				display: block;
				line-height: 25px;
			}

			.staffelkorting_details .staffel_aantal{
				display: inline-block;
				margin-left: 6px;
			}
				.staffelkorting_details .staffel_aantal #staffel_aantal_select{
					width: 60px;
					padding: 2px;
				}
			.staffelkorting_details .staffel_prijs{
				display: inline-block;
				position: absolute;
				right: 6px;
				text-align: right;
			}

			.staffelkorting_details .staffel_footer .staffel_title, .staffelkorting_details .staffel_footer .staffel_title{
				color: #8CD50B;
				text-transform: uppercase;
				margin-top: 5px;
				font-weight: bolder;
				font-size: 14px;
			}
			.staffelkorting_details .staffel_footer{
				font-size: 16px;
				line-height: 25px;
			}





	/* ############## */
	/* FILTER SETTING */
		.filter_prev_content{
			display: inline-block;
			margin-right: 10px;
			line-height: 25px;
			margin-bottom: 30px;
			font-size: 11px;
			vertical-align: top;
		}


	/* ############## */
	/* RECHTER KOLOM  */
	.product_detail .col_right{
		display: inline-block;
		width: 670px;
		margin-left: 30px;
		vertical-align: top;
	}

	.product_detail .col_right_container{
		display: block;
	}
	.product_detail .col_right_container:after, .product_detail .col_right_container:before{
		content: " ";
		display: table;
	}
	.product_detail .col_right_container:after{
		clear: both;
	}

		.col_right_container .col_right_container_content{
			display: inline-block;
			width: 454px;
		}

			.col_right_container .col_right_container_content #proddesccontainer a{
				text-decoration: underline;
				color: #008FD5;
			}

			.col_right_container_content .proddesc{
				font-family: 	arial, verdana, sans-serif;
				color: 			#444444;
				font-size: 		12px;
				margin-bottom: 	15px;
				line-height: 	140%;
			}

			.col_right_container_content .proddesc ul{
				padding-left:       15px;
				margin:				0px;
				font-size:          inherit;
				font-weight:        inherit;
				background-color:   inherit;
			}
			.col_right_container_content .proddesc ul li{
				font-size:          inherit;
				font-weight:        inherit;
			}

			.col_right_container_content .proddesc h1{
				display: 		inline-block;
				font-size: 		22px;
				font-weight: 	bolder;
				margin-top: 	3px;
				margin-bottom: 	5px;
			}
			.col_right_container_content .proddesc h2{
				display: 		inline-block;
				font-size: 		20px;
				font-weight: 	bolder;
				margin-top: 	3px;
				margin-bottom: 	5px;
			}
			.col_right_container_content .proddesc h3{
				display: 		inline-block;
				font-size: 		16px;
				font-weight: 	bolder;
				margin-top: 	3px;
				margin-bottom: 	5px;
			}
			.col_right_container_content .proddesc h4{
				display: 		inline-block;
				font-size: 		14px;
				font-weight: 	bolder;
				margin-top: 	3px;
				margin-bottom: 	5px;
			}

			.col_right_container_content .heightcontainer_text{
				position: relative;
				max-height: 280px;
				overflow: hidden;
				-webkit-transition: max-height 1s;
				-moz-transition: max-height 1s;
				transition: max-height 1s;
				margin-bottom: 30px;
			}

			.col_right_container_content .heightcontainer_text.google{
				max-height: none !important;
			}

			.col_right_container_content .heightcontainer{
				position: relative;
				max-height: 300px;
				overflow: hidden;
				-webkit-transition: max-height 1s;
				-moz-transition: max-height 1s;
				transition: max-height 1s;
				margin-bottom: 30px;
			}

			.col_right_container_content .heightcontainer.google{
				max-height: none !important;
			}

			.col_right_container_content .heightcontainer.google .heightcontainer_gradient, .col_right_container_content .heightcontainer_text.google .heightcontainer_gradient{
				display: none;
			}

			.col_right_container_content .heightcontainer_gradient{
				background: -webkit-linear-gradient(to bottom,rgba(255,255,255,0),rgba(255,255,255,1));
				background: -o-linear-gradient(to bottom,rgba(255,255,255,0),rgba(255,255,255,1));
				background: -moz-linear-gradient(to bottom,rgba(255,255,255,0),rgba(255,255,255,1));
				background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,1));
				-webkit-transition: opacity 1s;
				-moz-transition: opacity 1s;
				transition: opacity 1s;
				display: block;
				position: absolute;
				bottom: 0px;
				z-index: 99;
				width: 100%;
				height: 60px;
				text-align: center;
			}
				.heightcontainer_gradient .showmore_block{
					display: inline-block;
					margin-left: auto;
					margin-right: auto;
					background-color: #FFFFFF;
					border: 1px solid #8CD50B;
					height: 20px;
					position: relative;
					bottom: -35px;
					cursor: pointer;
				}
					.heightcontainer_gradient .showmore_block .showmore_icon{
						display: inline-block;
						width: 15px;
						line-height: 20px;
					}
					.heightcontainer_gradient .showmore_block .showmore_icon img{
						position: relative;
						top: 1px;
						left: 4px;
					}
					.heightcontainer_gradient .showmore_block .showmore_text{
						display: inline-block;
						line-height: 20px;
						padding: 0 5px;
						color: #8CD50B;
					}

			.col_right_container_content .template{
				display: block;
				width: 454px;
			}

				.col_right_container_content .template .t0{
					display: block;
					line-height: 25px;
					background-color: #FFFFFF;
					font-family: 'Arial', sans-serif;
					font-size: 12px;
					font-weight: 400;
					clear: both;
				}
				.col_right_container_content .template .t0:nth-child(2n){
					background-color: #EEEEEE;
				}
				.col_right_container_content .template .t1{
					display: inline-block;
					width: 205px;
					padding-left: 5px;
					vertical-align: top;
				}
				.col_right_container_content .template .t2{
					display: inline-block;
					width: 244px;
				}
				.col_right_container_content .template .t2 img{
					position: relative;
					top: 2px;
				}

		.col_right_container .col_right_container_wishlist{
			display: inline-block;
			width: 180px;
			float: right;
		}

			.col_right_container .vanvoor{
				display: block;
				height: 25px;
				max-width: 80px;
				font-family: Roboto, 'Arial', sans-serif;
				font-size: 18px;
				font-weight: 400;
				color: #999999;
				vertical-align: top;
				position: relative;
				margin-right: 5px;
			}

			.col_right_container .vanvoor .prijs{
				display: block;
				width: 100%;
				position: absolute;
				top: 4px;
				text-align:center;
				white-space:nowrap;
			}
			.col_right_container .vanvoor .line{
				display: block;
				width: 100%;
				height: 100%;
				position: absolute;
				top: 14px;
				left: 0px;
				border-bottom: 1px solid #4C4D4E;
				-webkit-transform: rotate(170deg);
				transform: rotate(170deg);
			}


		.col_right_container_wishlist .pricerspace{
			display:inline-block;
			vertical-align: top;
		}

		.col_right_container_wishlist .infobutton{
			display: 			block;
			margin-right: 		10px;
			padding:			5px 0px 5px 0px;
			background-color:  	#84C100;
			cursor: 			pointer;
			margin-top: 		5px;
			text-align:			center;
			color: 				#FFF;
			text-transform:		uppercase;
			font-size:			12px;
			font-weight: 		600;
			line-height:		20px;
		}

		.col_right_container_wishlist .shopbutton{
			display: block;
			margin-right: 10px;
			height: 50px;
			background-color:  #008FD5;
			cursor: pointer;
			margin-top: 5px;
		}

			.col_right_container_wishlist .shopbutton .img{
				display: inline-block;
				width: 45px;
				height: 50px;
				background-image: url('/templates/basic/images/icoon_winkelwagen.png');
				background-position: center center;
				background-repeat: no-repeat;
				vertical-align: top;
			}
			.col_right_container_wishlist .shopbutton .text{
				display: inline-block;
				font-family: 'Roboto', sans-serif;
				font-size: 15px;
				font-weight: 500;
				color: #FFFFFF;
				line-height: 50px;
				vertical-align: top;
				text-transform: uppercase;
			}


		.col_right_container_wishlist .usp_list{
			display: block;
		}
			.usp_list .uspcheck{
				display: inline-block;
				width: 15px;
				line-height: 15px;
				margin-top: 8px;
				vertical-align: top;
			}
			.usp_list .uspcheck img{
				position: relative;
				top: 2px;
			}
			.usp_list .usptext{
				display: inline-block;
				width: 160px;
				font-family: 'Roboto', sans-serif;
				font-size: 13px;
				font-weight: 500;
				line-height: 15px;
				margin-top: 8px;
			}

	.product_detail .col_right_bundels{
		display: block;
	}

	.shopbutton .teaserdate{
		width:100%;
		font-size:19px !important;
		line-height:19px !important;
		text-align:center;
		padding-top:7.5px;
	}

	.priceBlock .shopbutton.teaserdate, .pricerspace .pricer.teaserdate{
		background: #008FD5;
		color: #fff;
		width: 135px;
		font-size: 15px;
		font-family: 'Roboto', sans-serif;
		font-weight: 500;
		text-align: center;
		line-height: 15px;
		padding-top: 5px;
		box-sizing: border-box;
		cursor: default;
	}

	.teaserdate.date{
		padding:0;
		font-size:16px !important;
		line-height:16px !important;
	}

	.priceBlock .shopbutton.teaserdate .date, .pricerspace .pricer.teaserdate .date{
		font-size:13px;
	}


/* ####################################### */
/* 2017 ADMIN							   */
/* ####################################### */
	.admin_row{
		display: block;
		line-height: 200%;
		background-color:#FFFFFF;
		margin-left: 10px;
	}
	.admin_row:nth-child(2n){
		background-color:#EEEEEE;
	}

	.admin_row.title{
		display: block;
		line-height: 200%;
		font-family: 'Roboto', sans-serif;
		font-size: 15px;
		font-weight: 500;
		background-color: #8CD50B;
		color:#FFFFFF;
	}

	.admin_cell{
		display: inline-block;
		position: relative;
		line-height: 200%
	}
		.admin_cell.w20{
			width: 20px;
		}
		.admin_cell.w25{
			width: 25px;
		}
		.admin_cell.w50{
			width: 50px;
		}
		.admin_cell.w100{
			width: 90px;
		}
		.admin_cell.w125{
			width: 115px;
		}
		.admin_cell.w200{
			width: 190px;
		}
		.admin_cell.w250{
			width: 240px;
		}
		.admin_cell.w300{
			width: 290px;
		}

	.admin_cell.center{
		text-align:center;
	}
	.admin_cell.center img{
		vertical-align: middle;
	}

	.admin_cell:nth-child(1){
		margin-left: 10px;
	}
	.admin_cell.maintitle{
		font-family: 'Roboto', sans-serif;
		font-size: 20px;
		font-weight: 700;
		color: #8CD50B;
	}

	.admin_cell input{
		width: 70%;
	}

	.admin_save{
		margin-top:10px;
		margin-left: 10px;
		width: auto;
		padding: 5px !important;
		border: 1px solid #8CD50B !important;
		background-color: #FFFFFF;
		color: #8CD50B;
		cursor: pointer;
		font-size: 14px;
		font-weight: 500;
	}

	.admin_save:hover{
		border: 1px solid #FFFFFF !important;
		background-color: #8CD50B;
		color: #FFFFFF;
	}


/* ####################################### */
/* PostNL MAPS							   */
/* ####################################### */

	#postnl_lijst{
		display:inline-block;
		width:300px;
		height:400px;
		vertical-align:top;
		margin-bottom:25px;
	}

	#postnl_map {
		height: 400px;
		width: 690px;
		display:inline-block;
		vertical-align:top;
		margin-bottom:25px;
		float: right;
	}
	#mapssluiten{
		height: 400px;
		width: 40px;
		display:inline-block;
		text-align:center;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	.mapssluiten_content{
		display:inline-block;
		width: 30px;
		height: 30px;
		border-radius: 50%;
		background-color:#008FD5;
		color:#FFFFFF;
		line-height:30px;
		font-weight:bolder;
		font-size:18px;
	}
	.mapssluiten_content:hover{
		background-color:#016EA7;
		cursor:pointer;
	}

	.adresblok{
		display: block;
		border-bottom:1px solid #B3B3B3;
		color: #444444;
		height: 65px;
	}
	.adresblok:hover{
		background-color: #CBEDFF;
		cursor: pointer;
	}
	.adresblok_select{
		display: block;
		border-bottom:1px solid #B3B3B3;
		background-color: #008FD5;
		color: #FFFFFF;
		height: 65px;
	}
	.adresblok_select:hover{
		background-color: #016EA7;
		cursor: pointer;
	}

	.adresblok_titel{
		font-family: arial, verdana, sans-serif;
		font-weight:bolder;
		padding-left: 5px;
		font-size: 13px;
		width: 190px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		margin-top:10px;
	}
	.adresblok_adres{
		padding-left: 5px;
		font-size: 11px;
		font-style: italic;
		width: 170px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}


/* ####################################### */
/* TEKSTEN 2016						   */
/* ####################################### */
.teksten{
	display: block;
	margin-top: 15px;
}



/* ####################################### */
/* 2016 								   */
/* ####################################### */
.busy{
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -100px;
	margin-left: -150px;
	background-color: #8CD50B;
	z-index: 1000;
	height: 187px;
	width: 300px;
	font-family: arial;
	font-size: 18px;
	color:#FFFFFF;
	text-align:center;
	box-shadow: 10px 10px 25px rgba(0,0,0,0.55);
	border-radius: 20px;
	border: 6px solid #FFFFFF;
	visibility:hidden;
}

.admin_button{
	display:inline-block;
	width:200px;
	border-radius:4px;
	background-color:#8CD50B;
	color:#FFFFFF;
	cursor: pointer;
}
.admin_button:hover{
	background-color:#008FD5;
}

.admin_menublock {
	display: inline-block;
	width: 240px;
	height: 240px;
	margin-right:10px;
	margin-bottom:10px;
	vertical-align:bottom;
	background-position: center center;
	background-repeat: no-repeat;
	position: relative;
}

.admin_menublock:hover{
	cursor:pointer;
}

.admin_menublock_title {
	display:inline-block;
	position:absolute;
	bottom:0px;
	width: 240px;
	height:40px;
	line-height:40px;
	text-align: center;
	text-transform:uppercase;
	font-weight: bolder;
	background-color: rgba(140,213,11,0.8);
	font-family: arial, verdana, sans-serif;
	color: #FFFFFF;
	text-decoration: none;
	font-size: 13px;
	white-space: nowrap;
	overflow: hidden;
	vertical-align:bottom;
}

/* ############################ */
/* Algemene tabellen            */
/* ############################ */
.table {
	display: table;
}

.table_row {
	display: table-row;
}

.table_row_groen {
	display: table-row;
	background-color: #8CD50B;
	height: 30px;
	vertical-align: middle;
}

.table_cell_wittitel {
	display: table-cell;
	height: 30px;
	font-family: arial, verdana, sans-serif;
	color: #FFFFFF;
	font-size: 13px;
	vertical-align: middle;
	padding-left: 5px;
}

.table_cell {
	display: table-cell;
	font-family: arial, verdana, sans-serif;
	color: #444444;
	font-size: 12px;
	vertical-align:middle;
}

.wishlist_container_800 {
	display: table;
	width: 800px;
	vertical-align: top;
}
.wishlist_container_790 {
	display: table;
	width: 790px;
	vertical-align: top;
}
.wishlist_container_600 {
	display: table;
	width: 600px;
	vertical-align: top;
}
.wishlist_container_hidden {
	display: none;
	width: 600px;
}
.wishlist_container_row {
	display: table-row;
}
.wishlist_container_content {
	display: table-cell;
	width: 600px;
	vertical-align: top;
}

.wishlist_container_spacer {
	display: table-cell;
	width: 10px;
}

.wishlist_container_info {
	display: table-cell;
	width: 190px;
	vertical-align: top;
}

.wishlist_content {
	display: table;
	margin-bottom:5px;
}

.wishlist_row_titel {
	display: table-row;
	background-color: #8CD50B;
}
.wishlist_img_titel {
	display: table-cell;
	width: 70px;
	height: 30px;
}
.wishlist_name_titel {
	display: table-cell;
	width: 360px;
	height: 30px;
	vertical-align:middle;
	font-family: arial, verdana, sans-serif;
	color: #FFFFFF;
	font-size: 13px;
}
.wishlist_aantal_titel {
	display: table-cell;
	width: 65px;
	height: 30px;
	vertical-align:middle;
	font-family: arial, verdana, sans-serif;
	color: #FFFFFF;
	font-size: 13px;
	text-align: center;
}
.wishlist_prijs_titel {
	display: table-cell;
	width: 65px;
	height: 30px;
	vertical-align:middle;
	font-family: arial, verdana, sans-serif;
	color: #FFFFFF;
	font-size: 13px;
	text-align: right;
}
.wishlist_verwijder_titel {
	display: table-cell;
	width: 40px;
	height: 30px;
	vertical-align: middle;
	color:#FFFFFF;
	text-align: center;
}

.wishlist_row {
	display: table-row;
}

.wishlist_img {
	display: table-cell;
	width: 70px;
	height: 60px;
	vertical-align:middle;
	padding-left: 2px;
}
.wishlist_name {
	display: table-cell;
	width: 360px;
	height: 60px;
	vertical-align:middle;
	font-family: arial, verdana, sans-serif;
	font-size: 12px;
	color: #444444; /* was black */
}
.wishlist_aantal {
	display: table-cell;
	width: 65px;
	height: 60px;
	vertical-align:middle;
	text-align: center;
	vertical-align:middle;
	font-family: arial, verdana, sans-serif;
	font-size: 12px;
	color: #444444; /* was black */
}
.wishlist_prijs {
	display: table-cell;
	width: 65px;
	height: 60px;
	vertical-align:middle;
	text-align: right;
	vertical-align:middle;
	font-family: arial, verdana, sans-serif;
	font-size: 12px;
	color: #444444; /* was black */
}
.wishlist_verwijder {
	display: table-cell;
	width: 40px;
	height: 60px;
	vertical-align:middle;
	text-align: center;
}
.wishlist_img_miniimg {
	max-width: 60px;
	max-height: 60px;
}

.wishlist_line {
	width: 600px;
	height: 1px;
	background-color: #DDDDDD;
	margin-top: 5px;
	margin-bottom: 5px;
}

.wishlist_informatie_container {
	display: table;
	width: 190px;
	position: relative;
	left: 8px;
}

.wishlist_informatie_row {
	display: table-row;
}

.wishlist_informatie_titel {
	display: table-cell;
	width: 190px;
	height: 30px;
	background-color: #8CD50B;
	vertical-align:middle;
	font-family: arial, verdana, sans-serif;
	color: #FFFFFF;
	font-size: 13px;
	text-align: center;
}

.wishlist_informatie_content {
	display: table-cell;
	position: relative;
	top: 2px;
	width: 190px;
	font-family: arial, verdana, sans-serif;
	font-size: 12px;
	color: #444444; /* was black */
}

.wishlist_input {
	font-size: 14px;
	padding:3px;
	text-align: center;
	background-color: #FFFFFF;
	border: 1px solid #8CD50B;
}

.wishlist_input_small {
	font-size: 13px;
	padding: 1px;
	background-color: #FFFFFF;
	border: 1px solid #8CD50B;
}

.wishlist_informatie_content_table {
	display: table;
	width: 190px;
	border:1px solid #E8E8E8;
}

.wishlist_informatie_content_row {
	display: table-row;
}

.wishlist_informatie_content_titel {
	display: table-cell;
	height: 30px;
	vertical-align: middle;
	background-color: #E8E8E8;
	padding-left: 5px;
	font-family: arial, verdana, sans-serif;
	color: #444444;
	font-size: 12px;
}

.wishlist_informatie_content_text {
	display: table-cell;
	vertical-align: middle;
	background-color: #F7F7F7;
	padding-left: 5px;
	padding-top: 10px;
	padding-bottom: 10px;
	font-family: arial, verdana, sans-serif;
	font-size: 12px;
	color: #444444; /* was black */
}

.wishlist_informatie_content_spacing {
	display: table-row;
	height: 2px;
}

	.wishlist_container_large {
		display: table;
		margin-top: 10px;
	}

	.wishlist_container_large_hidden {
		display: none;
		margin-top: 20px;
	}

	.wishlist_row_title_large {
		display: table-row;
		background-color: #8CD50B;
		height: 30px;
	}

	.wishlist_row_large {
		display: table-row;
	}

	.wishlist_title_large {
		display: table-cell;
		vertical-align:middle;
		font-family: arial, verdana, sans-serif;
		color: #FFFFFF;
		font-size: 13px;
		padding-left: 5px;
		width: 600px;
	}

	.wishlist_title_large_900 {
		display: table-cell;
		vertical-align:middle;
		font-family: arial, verdana, sans-serif;
		color: #FFFFFF;
		font-size: 13px;
		padding-left: 5px;
		width: 800px;
	}

	.wishlist_cell_large {
		display: table-cell;
		width: 600px;
		font-family: arial, verdana, sans-serif;
		font-size: 12px;
		color: #444444; /* was black */
		padding-top: 5px;
		line-height: 120%;
	}

	.wishlist_cell_large_900 {
		display: table-cell;
		width: 800px;
		font-family: arial, verdana, sans-serif;
		font-size: 12px;
		color: #444444; /* was black */
		padding-top: 5px;
		line-height: 120%;
	}

	.wishlist_subcell_large {
		display: table-cell;
		width: 185px;
		font-family: arial, verdana, sans-serif;
		font-size: 12px;
		color: #444444; /* was black */
		padding-left: 5px;
	}

	.wishlist_cell_1 {
		display: table-cell;
		width: 250px;
		font-family: arial, verdana, sans-serif;
		font-size: 12px;
		vertical-align: middle;
		color: #444444; /* was black */
		padding-left: 5px;
		padding-bottom: 5px;
	}

	.wishlist_cell_2 {
		display: table-cell;
		width: 550px;
		font-family: arial, verdana, sans-serif;
		font-size: 12px;
		vertical-align: middle;
		color: #444444; /* was black */
		padding-bottom: 5px;
	}

.terug {
	display: table-cell;
	width: 165px;
	height: 30px;
	text-align: right;
	vertical-align: middle;
	background-image: url('/templates/basic/images/terug.png');
	background-repeat: no-repeat;
	font-family: arial, verdana, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
	font-size: 14px;
	position: relative;
	left: 5px;
	top: 10px;
}

.verder {
	display: table-cell;
	width: 165px;
	height: 30px;
	text-align: left;
	vertical-align: middle;
	background-image: url('/templates/basic/images/verder.png');
	background-repeat: no-repeat;
	font-family: arial, verdana, sans-serif;
	color: #FFFFFF;
	font-size: 13px;
	padding-left: 5px;

}

.question{
    display: inline-block;
    min-width: 25px;
    height: 25px;
    line-height: 25px;
    border: 1px solid #4c4d4e;
    text-align: center;
    box-sizing: border-box;
}

.main.question{
	background-color: #f3a1a1;
}

.main.question.add{	
    cursor: pointer;
}

.cf_row{
	display: block;
    width: 80%;
    min-height: 25px;
    padding: 2px 5px;
    box-sizing: border-box;
    background-color: #ccc;
    border: 1px solid #4c4d4e;
    position: relative;
    font-size: 0;
}

/*.cf_row:not(.level0)::before{
	content: '\21B3';
    display: inline-block;
    position: absolute;
    left: -15px;
    top: -4px;
    font-size: 20px;
    font-weight: bold;
    color: #616161;
}*/

.cf_row.level0{
	background-color:#f3a1a1;
}

.cf_row.answer{
	background-color:#c0f5bf;
}
	
	.cf_row .cf_titel, .cf_row .cf_buttons{
		display: inline-block;
	    line-height: 25px;
	    vertical-align: top;
	}

	.cf_row .cf_titel{
		width:85%;
		font-size:14px;
	}

	.cf_row .cf_buttons{
		width:15%;
		text-align: right;
		cursor: pointer;
	}
		.cf_row .cf_buttons>span, .cf_row .cf_buttons>a{
			display: inline-block;
		    width: 18px;
		    height: 18px;
		    text-align: center;
		    background-position: center;
		    vertical-align: middle;
		    background-size: contain;
		    margin: 0 3px;
		}

	.dropzone{
		height: 7px;
		width:80%;
	    border-top: 2px solid #fff;
	    border-bottom: 2px solid #fff;
	    box-sizing: border-box;
	    background: #fff;
	}

    .dropzone.show{
		background: #8CD50B;
	}	
	
	#editscreen{
		display: none;
	    position: fixed;
	    top: calc(50% - 75px);
	    left: calc(50% - 150px);
	    width: 350px;
	    min-height: 175px;
	    background-color: #deedff;
	    z-index: 1;
	    border: 1px solid #4c4d4e;
	    padding: 20px 5px 5px 5px;
	    box-sizing: border-box;
	}
	#editscreen.shown{
		display: inline-block;
	}

		#editscreen .closeedit{
		    position: absolute;
		    top: 0;
		    left: 0;
		    cursor: pointer;
		    width: 100%;
		    background-color: #4c4d4e;
		    text-align: right;
		    padding-right: 5px;
		    box-sizing: border-box;
		    color: #deedff;
		    height: 15px;
		}
			#editscreen .closeedit:hover{
				color:#fff;
			}

		#editscreen #edittype{
		    border-radius: 3px;
		    box-sizing: border-box;
		    padding: 3px;
		    margin-left: 5px;
		}
	
		#editscreen .saveedit{
			position: absolute;
			top: calc(100% - 25px);
			right: 5px;
			cursor:pointer;
		}
	
	.editlabel{
	    width: 70px;
    	display: inline-block;
	}

	#cf_inputvalue, #cf_inputtitle{
	    padding: 5px;
	    width: 240px;
	    border-radius: 3px;
	    box-sizing: border-box;
	    margin-left: 5px;
	}

	#linktolist{
		display: none;
		list-style: none;
	    background: #fff;
	    width: 100%;
	    margin: 5px 0 25px 1px;
	    max-height: 100px;
	    overflow-y: scroll;
	}
	#linktolist.shown{
		display: inline-block;
	}

		#linktolist .linktoitem{
		    padding: 5px;
		    cursor: pointer;
		}

		#linktolist .linktoitem:hover{
			background-color: #78b5ff;
		}

.cf_header{
    color: #8cd50b;
    font-size: 26px;
    margin-bottom: 20px;
}
.cf_ul{
	list-style: none;
}
	.cf_li{
		border: 1px solid #4c4d4e;
	    margin: -1px 0;
	    position: relative;
	    cursor: pointer;
	}
	.cf_li:hover{
		background-color: #8cd50b;
		color:#fff;
	}
	.cf_li:hover a{
		color:#fff;
	}

		.cf_link{
			display: block;
			padding:5px;	
		}
			.cf_vraag{
				
			}
			.cf_next{
			    width: 50px;
			    text-align: center;
			    position: absolute;
			    right: 0;
			}

/* ############################ */
/* TABELLEN ORDERHISTORY        */
/* ############################ */
.table_row_orderhistory_titel{
	display: table-row;
	background-color:#DDDDDD;
	height: 30px;
}
.table_row_orderhistory_1{
	display: table-row;
	background-color:#EEEEEE;
	height: 30px;
}
.table_row_orderhistory_2{
	display: table-row;
	background-color:#FFFFFF;
	height: 30px;
}

.textmaincolor{
	color: #8CD50B;
	font-family: arial, verdana, sans-serif;
	font-size: 12px;
}

.backgroundmaincolor{
	background-color: #8CD50B;
	font-family: arial, verdana, sans-serif;
	font-size: 13px;
}

.backgroundsubcolor{
	background-color: #008FD5;
	font-family: arial, verdana, sans-serif;
	font-size: 13px;
}

.bordermaincolor{
	border:1px solid #8CD50B;
	font-family: arial, verdana, sans-serif;
	font-size: 12px;
}

/* ############################ */
/* FAQ					        */
/* ############################ */
.faqblock{
	transition: height 0.5s;
	cursor: default;
	color: #444444;
}

.faqblock:hover{
	background-color:#8CD50B;
	color: #FFFFFF;
	cursor: pointer;
}

/* ############################ */
/* vacatures			        */
/* ############################ */
.vacatureblockcont{
    position: relative;
    margin-bottom: 50px;
    display: block;
}
.vacatureBlock{
	transition: height 0.5s;
	cursor: default;
	color: #444444;
	overflow: hidden;
	display: block;
	background-color:#fff;
	line-height:20px;
    border-bottom: 2px solid #4d4d4e;
	margin-bottom:10px;
	background: linear-gradient(to bottom, #ffffff 0%,#f1f1f1 50%,#dedede 100%);
    padding-bottom: 30px;
}
.vacatureBlock.closed{
    padding-bottom: 0px;
	background: linear-gradient(to bottom, #ffffff 0%,#ffffff 50%,#cccccc 100%);
}
.vacaturetitel{
	padding: 5px;
    width: 100%;
    display: block;
    box-sizing: border-box;
    background: linear-gradient(
    135deg,
    	#84C100 0%, #84C100 82.5%,

    	#8CD50B 82.5%,#8CD50B 85%,
    	#84C100 85%,#84C100 87.5%,

    	#8CD50B 87.5%,#8CD50B 90%,
    	#84C100 90%,#84C100 92.5%,

    	#8CD50B 92.5%,#8CD50B 95%,
    	#84C100 95%,#84C100 97.5%,

    	#8CD50B 97.5%,#8CD50B 100%
    );
    text-transform: uppercase;
    color:#fff;
	font-size: 18px;
	font-weight: bold;
}

.vacatureuitleg{
	display:block;
	padding:5px;
}

.toonmeerblock{
 	color: #fff;
 	display:block;
    position: absolute;
  	bottom: -30px;
    float: left;
    margin: 0px 20px;
    font-size: 1em;
    line-height: 30px;
    background-color: #4d4d4e;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
   	-ms-transform: translateX(-50%);
   	transform: translateX(-50%);
}

.vacaturebody{
	display:block;
}

.toonmeerblock:before {
	content: '';
    height: 0;
    width: 100%;
    position: absolute;
    text-align: center;
    top: 0;
    left: -49px;
    z-index: -1;
    border: 49px solid transparent;
    border-top: 30px solid #4d4d4e;
    border-bottom: 0px solid transparent;
}

.toonmeerblock.hidden{
	display:none;
}

.toonminderblock{
 	color: #fff;
 	display:block;
    position: absolute;
    bottom: 2px;
    float: left;
    margin: 0px 20px;
    font-size: 1em;
    line-height: 30px;
    background-color: #4d4d4e;
    margin-left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
   	-ms-transform: translateX(-50%);
   	transform: translateX(-50%);
}

.toonminderblock:before {
	content: '';
    height: 0;
    width: 100%;
    position: absolute;
    text-align: center;
    top: 0;
    left: -49px;
    z-index: -1;
    border: 49px solid transparent;
    border-bottom: 30px solid #4d4d4e;
    border-top: 0px solid transparent;
}

.toonminderblock.hidden{
	display:none;
}

/* ################################ */
.hpto_admin_container{
	display: table;
	width: 100%;
	box-sizing: border-box;
	border: 1px solid #AAAAAA;
	vertical-align: top;
	line-height: 25px;
	margin-bottom: 30px;
}

.hpto_admin_container.nomargin{
	margin-bottom: 0px;
}

.hpto_admin_container div{
	padding-left: 5px;
	padding-right: 5px;
	border-right: 1px solid #DDDDDD;
	vertical-align: top;
	line-height: 30px;
}
.hpto_admin_container div:nth-child(2n){
	border-right: 0px solid #DDDDDD;
}

.hpto_admin_row{
	display: table-row;
}
	.hpto_admin_row div{
		border-top: 1px solid #EEEEEE;
	}
	.hpto_admin_row.title{
		font-weight: 600;
		background-color: #EEEEEE;
	}

	.hpto_admin_name{
		display: table-cell;
		width: 150px;
		vertical-align: top;
	}
	.hpto_admin_desc{
		display: table-cell;
		width: 400px;
		vertical-align: top;
	}
	.hpto_admin_vantot{
		display: table-cell;
		width: 200px;
		vertical-align: center;
		text-align:right;
		margin-right: 10px;
	}
	.hpto_admin_views{
		display: table-cell;
		vertical-align: top;
		width: 40px;
	}
	.hpto_admin_edit{
		display: table-cell;
		padding-right: 5px;
		vertical-align: middle !important;
		text-align: center;
		height: 100%;
		border-style: none !important;
		cursor: pointer;
	}
		.hpto_admin_edit img{
			margin-top: 7px;
		}
		.hpto_admin_edit:hover{
			background-color: #0197E5;
		}

.hpto_admin_def{
	display: table-cell;
	width: 250px;
}
.hpto_admin_val{
	display: table-cell;
}
.hpto_admin_comment{
	font-size: 11px;
	font-style: italic;
}


/* ############################ */
/* Email voorkeuren	        */
/* ############################ */

	.emailvoorkeuren_checkbox{
		display:inline-block;
		margin-left: 10px;
		margin-right: 5px;
		line-height: 30px;
	}
	.emailvoorkeuren_checkbox input[type="checkbox"]{
		width: 16px;
		height: 16px;
	}
	.emailvoorkeuren_label{
		display:inline-block;
		line-height: 30px;
		position: relative;
		top: -2px;
	}
	.emailvoorkeuren_title{
		display: block;
		font-weight: bolder;
		margin-left: 10px;
		margin-bottom: 10px;
	}
	.emailvoorkeuren_text{
		margin-left: 10px;
	}
	.emailvoorkeuren_statusupdate{
		line-height: 200%;
		margin-bottom: 50px;
		margin-left: 10px;
	}

	#mailingakkoord_show{
		visibility: hidden;
		line-height: 30px;
	}
		#mailingakkoord_show.show{
			visibility: visible;
		}

	#optin_container{
		display: block;
		margin-top: 40px;
		visibility: hidden;
	}
		#optin_container.show{
			visibility: visible;
		}

.blocksheader{
	min-width:1000px;
}

#populairSubgroups{
	-webkit-columns:5;
	-moz-columns:5;
	columns: 5;

    -webkit-column-gap: 0px; /* Chrome, Safari, Opera */
	-moz-column-gap: 0px; /* Firefox */
	column-gap: 0px;

	-webkit-column-rule: 0px; /* Chrome, Safari, Opera */
	-moz-column-rule: 0px; /* Firefox */
	column-rule: 0px;

	height: 170px;
    margin-top: 15px;
    margin-bottom: 30px;
	overflow: hidden;
}

#populairSubgroups a.popItem{
	font-family: 'Roboto';
	display:block;
	padding:0 15px;
	box-sizing:border-box;
    vertical-align: top;
	overflow:hidden;
    height: 21px;
    line-height: 25px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

#populairSubgroups a.popItem:hover{
	text-decoration: underline;
}

#populairSubgroups a.popItem.prod{
	font-weight: 700;
	color: #8CD50B;
	font-size:14px;
    line-height: 20px;
}

#populairSubgroups a.popItem.sub{
	color: #4C4D4E;
	font-size:13px;
    line-height: 20px;
}

#wordcloudcont{
	position: relative;
    box-sizing: border-box;
    margin-bottom: 10px;
    padding: 0 15px;
    overflow: hidden;
    height: 128px;
    list-style: none;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    justify-content: space-between;
}

#wordcloudcont .searchwordlink{
   	font-family: 'Roboto';
    font-size: 13px;
    line-height: 21px;
    cursor: pointer;
    margin: 0 2px;
    color: #4C4D4E;
    display: inline-block;
}

#wordcloudcont .searchword{
    display: inline-block;
}

#wordcloudcont .searchwordlink:hover, .wcpageletter:hover{
	text-decoration: underline;
}

.wordclouddivider{
	margin:0 5px;
}

.azline{
    margin: 15px 0 10px 17px;
    box-sizing: border-box;
}

.wordcloudindex{
    margin: 10px 10px 10px 0;
}

.wcpageletter{
	cursor:pointer;
}

.wordcloudcontainer .wcpageletter{
	font-size:18px;
}

.wcpageletter a{
	color: #4C4D4E;
}

.wcpageletter:not(:last-child):after{
	content:'|';
	margin:0 3px;
	color: #4C4D4E;
}

.wordcloudcontainer{
	box-sizing: border-box;
	padding:10px;
}

#whiteline{
	position: absolute;
	display: block;
    right: 20px;
    height: 128px;
    width: 3px;
    background: #fff;
}

.pwLengthNote{
	max-width:400px;
}

.pwLengthNote::after{
    display: inline-block;
    content: "Let op! Je wachtwoord mag maximaal 20 tekens zijn.";
    box-sizing: border-box;
    padding: 5px;
    margin: 5px 0 0 0;
    background-color:#fff;
    border: 2px solid #8cd50b;
    font-size:12px;
    color: #444444;
}

#settings input:read-only{
	background-color:#EEEEEE;
}

#header_melding{
	display: block;
	height: 50px;
	padding-left: 25px;
	line-height: 50px;
	position: relative;
	margin-top: 10px;
}

	#header_melding .header_melding_tekst{
		display: inline-block;
	}
	#header_melding .header_melding_sluit{
		display: inline-block;
		width: 50px;
		height: 50px;
		position: absolute;
		top: 0px;
		right: 0px;
		text-align: center;
	}
		#header_melding .header_melding_sluit:hover{
			cursor: pointer;
			background-color: rgba(0,0,0,0.1);
		}

