<?php get_header(); ?>
<style>
	html {overflow-x: hidden;}
    .inner-page {
        padding-top: 123px;
        margin: 0 auto;
        max-width: 1280px;
    }
    body .teacher-card .photo,
    .photoblock,
    .teacher-card {background-attachment: scroll;}
    body .teacher-card .photo.tutor-place-photo {
        background-image: url("data:image/svg+xml,%3Csvg width='50' height='65' viewBox='0 0 50 65' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.23934 10.64L13.2593 14.17C11.6693 16.52 10.8393 19.22 10.8393 22.05C10.8393 29.79 17.1293 36.15 24.9393 36.15C32.7493 36.15 39.0393 29.86 39.0393 22.05C39.0393 19.28 38.2093 16.52 36.6893 14.24L43.7393 10.92V24.33L41.5993 28.89C41.4593 29.24 41.4593 29.58 41.6693 29.86C41.8793 30.14 42.2193 30.34 42.5693 30.34H46.6493C46.9993 30.34 47.3393 30.2 47.4793 29.86C47.6893 29.58 47.6893 29.24 47.5493 28.89L45.6793 24.33V10.02C45.6793 9.46998 45.6093 9.04998 44.6393 8.63998C44.4293 8.56998 25.4193 0.139976 25.4193 0.139976C25.1493 -2.38642e-05 24.8793 -2.38642e-05 24.5993 0.129976L5.23934 8.70998C4.89934 8.84998 4.61934 9.25998 4.61934 9.67998C4.61934 10.09 4.82934 10.44 5.23934 10.64ZM36.9093 22.05C36.9093 28.69 31.5193 34.08 24.8793 34.08C18.2393 34.08 12.8493 28.69 12.8493 22.05C12.8493 19.49 13.6793 17.07 15.1293 15L24.5293 19.22C24.6693 19.29 24.8093 19.29 24.9393 19.29C25.0793 19.29 25.2193 19.29 25.3493 19.22L34.6093 15.07C36.1493 17.14 36.9093 19.56 36.9093 22.05ZM44.1693 28.27L44.6493 27.23L45.0593 28.27H44.1693ZM25.0193 2.20998L41.8193 9.67998L25.0193 17.15L8.21934 9.67998L25.0193 2.20998Z' fill='url(%23paint0_linear_2006_2168)'/%3E%3Cpath d='M25.2893 38.64C11.8093 38.64 0.819336 49.63 0.819336 63.11C0.819336 63.66 1.29934 64.15 1.85934 64.15H48.7293C49.2793 64.15 49.7693 63.67 49.7693 63.11C49.7693 49.64 38.7693 38.64 25.2893 38.64ZM2.95934 62.08C3.50934 50.19 13.3293 40.72 25.3593 40.72C37.3893 40.72 47.1393 50.26 47.6893 62.08H2.95934Z' fill='url(%23paint1_linear_2006_2168)'/%3E%3Cdefs%3E%3ClinearGradient id='paint0_linear_2006_2168' x1='0.819336' y1='32.0918' x2='49.7693' y2='32.0918' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%23DA23FF'/%3E%3Cstop offset='1' stop-color='%239933EF'/%3E%3C/linearGradient%3E%3ClinearGradient id='paint1_linear_2006_2168' x1='0.819336' y1='32.0918' x2='49.7693' y2='32.0918' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%23DA23FF'/%3E%3Cstop offset='1' stop-color='%239933EF'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E%0A");
        background-color: #EEEEEE;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 48px auto;
        border-radius: 50%;
        height: 160px;
        width: 160px;
    }
    .teacher-card {border: 0.5px solid #C4C4C4;}
    .teacher-card.teacher-currr {max-width: 810px;}
    body .teacher-card .photo {margin: 20px 15px 9px 20px;}
    .photoblock .glsr-summary {
        gap: 0 6px;
        justify-content: center;
    }
    .button.smaller {
        line-height: 1em;
        padding: 12px 24px;
    }
    .teacher-currr .glsr-summary-text {padding-top: 4px;}
    .glsr-summary-text .glsr-tag-value {
        text-align: center;
        font-size: 14px;
        line-height: 1.2em;
        display: block;
        padding-top: 1px;
    }
    .single-anchor {
        display: inline-block;
        color: #000;
        padding: 8px 16px;
        border-radius: 5px;
        border-right: 1px solid var(---, #C4C4C4);
        border-bottom: 1px solid var(---, #C4C4C4);
        border-left: 1px solid var(---, #C4C4C4);
        background: #FFF;
    }
    ul.features {background-color: transparent;}
    .anchors {margin: 10px 0 32px;}
    .single-anchor:active {box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;}
    .anch-cover {
        display: inline-block;
        border-top: 1px solid #C4C4C4;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        margin-right: -4px;
    }
    .teachers-bio h3,
    .osvi-section h3 {margin-bottom: 20px;}
    .keywds {margin: 20px 0 12px;}
    .keywd {
        display: inline-block;
        color: #6536D6;
        font-size: 14px;
        font-weight: 500;
        line-height: 13px;
        border-radius: 11.17px;
        border: 1px solid #6536D6;
        background: rgba(217, 217, 217, 0.00);
        padding: 4px 15px;
        margin-right: 20px;
		margin-bottom: 10px;
    }
    .more-inf {
        font-size: 14px;
        line-height: 18px;
    }
    html body .teacher-current .bio-section {margin-bottom: 0;}
    body .teacher-current .bio-section .teachers-bio {padding-bottom: 23px;}
    .greybotborder {border-bottom: 1px solid #C4C4C4;}
    .osvi-section {padding: 20px 0 31px;}
    .marg-left26 {
        margin-left: 42px;
        font-size: 14px;
        line-height: 20px;
    }
    .marg-left26 p {
        font-size: 14px;
        line-height: 20px;
        color: #000;
        margin-bottom: 20px;
    }
    .marbot5 {margin-bottom: 5px;}
    .marbot10 {margin-bottom: 10px;}
    .qualif {
        font-size: 14px;
        line-height: 143%;
        color: #000;
    }
    .padleft5 {
        display: inline-block;
        padding-left: 5px;
    }
    body h3 {
        font-weight: 400;
        font-size: 20px;
        line-height: 1.66em;
    }
    body h4 {
        color: #000;
        font-size: 14px;
        font-weight: 400;
        line-height: 237.191%;
        letter-spacing: 0.311px;
        margin-bottom: 10px;
    }
    h3.greybotborder {padding-bottom: 20px;}
    .padding20-0 {padding: 20px 0;}
    .padding20-0-0 {padding: 20px 0 0;}
    .padding0-0-20 {padding: 0 0 20px;}
    .topgreyborder {
        /*border-top: 1px solid #C4C4C4;*/
    }
    .zava-highno {
       color: #FF1C1C;
        font-weight: 500;
    }
    .zava-medno {
        color: #757575;
        font-weight: 500;
    }
    .zava-lowno {
        color: #057A55;
        font-weight: 500;
    }
    .bluedotted {
        color: #000;
        font-size: 14px;
        font-weight: 400;
        line-height: 33.207px;
        position: relative;
        display: inline-block;
        margin-left: 25px;
    }
    .bluedotted:before {
        content: " ";
        background-color: rgba(101, 54, 214, 1);
        height: 10px;
        width: 10px;
        border-radius: 10px;
        position: absolute;
        left: -25px;
        top: 11px;
    }
    table tr td {padding-right: 20px;}
    table tr td:last-child {padding-right: 0;}
    .pricing-section .plan {padding: 25px 20px 20px;}
    .pricing-section .plan .price h2 {
        font-size: 35px;
        line-height: 1.12em;
    }
    body .flex-sta {align-items: flex-start;}
    .greeny {
        color: #218725;
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
    }
    .glsr-review-assigned_links {display: none;}
    body .pricing-section {padding: 20px 0;}
    body .pricing-section .head {margin-bottom: 2px;}
    body .glsr-reviews {gap: 20px;}
    .glsr-default .glsr-review-author {padding-top: 4px;}
    .tut-reviews .glsr-review-verified {display: none;}
    .blue-sticky {
        max-width: 417px;
        box-sizing: border-box;
        display: flex;
        flex: 0 0 265px;
        flex-direction: column;
        border-radius: 15px;
        padding: 28px 32px 25px 36px;
        background: #6536D6;
        margin-top: -548px;
        position: -webkit-sticky;
        position: sticky;
        top: 175px;
        left: calc(100% - 345px);
        z-index: 3;
        text-align: center;
    }
    .blue-sticky .tutornamesur {
        color: #FFF;
        font-size: 22px;
    }
    .blue-sticky .glsr-summary {
        gap: 0 0.5em;
        margin-bottom: 11px;
        justify-content: center;
    }
    .glsr-summary-rating {
        font-size: 16px;
        font-weight: 700;
    }
    .blue-sticky .glsr-summary-rating {
        color: #FFF;
        font-size: 15px;
    }
    .blue-sticky .glsr-summary-text .glsr-tag-value {
        font-size: 9px;
        font-weight: 100;
    }
    .blue-sticky .glsr-tag-value {
        color: #FFF;
        font-size: 16px;
        font-weight: 500;
    }
    .blue-sticky .button.smaller,
    .details .button.smaller {
        color: #000;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        border-radius: 40px;
        background: #FFF;
        padding: 12px 24px;
        margin-bottom: 10px;
    }
    .blue-sticky .button.smaller {
        padding: 14px 48px;
        font-size: 20px;
        line-height: 24px;
    }
    .blue-sticky .horizfl {
        justify-content: center;
        margin-right: 0;
    }
    .details .button.smaller {
        color: #fff;
        background-color: #6536D6;
    }
    .teacher-card .details .price-wrap {width: 100%;}
    .blue-sticky .sticky-note {
        font-size: 12px;
        font-weight: 500;
        color: #FFF;
    }
    .teacher-current .container,
    .other-teachers .container {
        margin-right: max(452px, calc(50% - 640px));
        margin-left: max(15px, calc(50% - 640px));
    }
    .horizfl {
        display: flex;
        align-items: center;
        margin-right: 30px;
    }
    .teacher-card .details {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
    .button-price.desktop-pad {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        height: 100%;
        margin: 0 35px 0 15px;
    }

    .teacher-card .details h1 {margin: 0;}
    .photoblock {padding: 0 0 11px 6px;}
    .photoblock .glsr-default {
        max-width: 140px;
        margin-left: 20px;
    }
    .teacher-card.additional,
    .teacher-card.additional .details {
        flex-direction: column;
        justify-content: center;
    }
    body .teacher-card.additional .photo {margin: 20px auto;}
    .displ520 {display: none;}
    .pricing-section .plan {
        padding: 20px;
        min-height: 300px;
    }
    body .glsr-summary .glsr-star {
        height: 19px;
        width: 19px;
        background-size: 19px;
    }
    .readmor {
        display: inline;
        color: #6536D6;
        font-weight: 500;
        cursor: pointer;
    }
    .readmor.glsr-review-assigned_links {display: none;}
    .add-text {display: none;}
    .pricing-section .plan .plan-description {margin-bottom: 32px;font-size: 14px;}
    .add-text.show {display: block;}
    .teacher-card .details h3,
    .teacher-card .buttons-wrap {width: 100%;}
    .details .glsr-default,
    .glsr-summary-wrap {width: 100}
    .padbot40 {padding-bottom: 40px;}
    .padbot60 {padding-bottom: 60px;}
    /*New Style*/
    .breadcrumbs-section {margin-bottom: 34px;}
    .teacher-current .breadcrumbs-section p {font-size: 14px;}
    .features {
        font-size: 14px;
        background-color: red;
    }
    .sticky_item_text {
        font-weight: 500;
        font-size: 17px;
        line-height: 118%;
        color: #fff;
        margin-bottom: 0px;
		text-align: left;
    }
    .sticky-title {
        font-weight: 500;
        font-size: 22px;
        line-height: 118%;
        text-align: center;
        color: #fff;
        margin: 0 18px 20px 14px;
    }
    .sticky_item {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .sticky_desc_block {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 20px;
    }
    .pricing-section .col {
        max-width: 175px;
        width: 100%;
    }

    .slider_box_pricing {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .teacher-current .row {gap: 15px;flex-wrap: nowrap;}
    .sale_sticky {
        max-width: 94px;
        left: -23px;
        top: -29px;
        position: absolute;
        image-rendering: inherit;
    }
    .teacher-card .features li {
        font-size: 16px;
        line-height: 20px;
        background-color: transparent;
    }
    .teacher-card .details .price {
        font-weight: 400;
        font-size: 18px;
    }
    .teachers-bio greybotborder h2 {margin-bottom: 20px;}
    .osvi-section {
        padding-top: 0px;
        padding-bottom: 40px;
    }
    .programs_grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .programs_column {width: fit-content;}
    .marg-left26 h4 {
        font-weight: 500;
        font-size: 14px;
        line-height: 237%;
        letter-spacing: 0.02em;
        color: #000;
    }
    .marg-left26 {padding: 15px 0px;}
    .teachers-nmt h2 {margin-bottom: 0px;}
    .teachers-nmt h3 {
        font-weight: 400;
        font-size: 14px;
        line-height: 129%;
        color: #121117;
        margin-bottom: 0px;
    }
    .teacher-card {
        margin-bottom: 50px;
        border-radius: 15px;
    }
    .anchors {
        margin-top: 0px;
        margin-bottom: 40px;
    }
    .teacher-current h2 {
        line-height: 33px;
        letter-spacing: 0.31px;
    }
    .teachers-quali h2,
    .teachers-bio h2 {margin-bottom: 5px;}
    #podtv {
        color: rgba(5, 122, 85, 1);
        font-size: 14px;
    }
    body .teacher-current .bio-section .teachers-bio {padding-bottom: 25px;}
    .teachers-osv h2 {margin-bottom: 5px;}
    .qualif {padding: 0px;}

    .teachers-quali h4 {
        margin-bottom: 15px;
        font-weight: 500;
    }
    .bottom_tutor_info {padding: 5px;}
    .nmt-padd {
        padding-top: 20px;
        padding-bottom: 15px;
    }
    .nmt-padding-none {padding: 0px;}
    .nmt_padding_bottom {
        margin-bottom: 0px;
        padding-bottom: 0px;
    }
    .teachers-dost h2 {margin-bottom: 20px;}
    .teachers-dost .nmt-padding-none {margin-bottom: 15px;}
    .flex-sta {
        margin-bottom: 0px;
        padding: 0px;
        margin-top: 15px;
    }
    .teachers-yac h2 {margin-bottom: 20px;}
    .lesson-one-video-title {margin-bottom: 20px;}
    .yak-pm {
        margin-bottom: 17px;
        color: #000;
    }
    .pricing-section {padding: 0px !important;}
    .pricing-section h2 margin-bottom: 40px;}
    .tut-reviews {padding: 0 0 40px;}
    .glsr-default .glsr-review-title h4 {
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
    }
    .glsr-default .glsr-review p {
        font-size: 14px;
        line-height: 14px;
    }
    .glsr-review .glsr-review-author .glsr-tag-value {
        line-height: 19px;
        font-style: italic;
    }
    .other-teachers {margin-top: 40px;}
    .other-teachers row {padding-top: 0px;}
    .other-teachers h2 {margin: 0 15px 30px;}
    .other-teachers .row {
        display: grid;
        gap: 15px;
        grid-template-columns: 1fr 1fr;
        grid-auto-flow: row;
        width: 100%;
        padding: 0;
    }
    .other-teachers .row .col a {
        display: inline-block;
        border-radius: 12px;
        padding: 8px 20px;
        color: black;
        border: 1px solid rgba(196, 196, 196, 1);
        font-weight: 500;
        size: 14px;
        line-height: 13px;
        background: white;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        margin-bottom: 17px;
    }
    .title-flexcont {padding-top: 18px;}
    body .teachers-section .col {width: 100%;}
    .pricing-section .plan .button {margin-top: 19px;}
    .anch-bot-0 {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important;
        border-bottom: none !important;
    }
    .after-anchor {
        padding-bottom: 55px;
        border-bottom: 1px solid #C4C4C4;
    }
    .actually-achor {margin-top: -15px;}
    .teachers-quali {margin-bottom: -15px;}
    body strong,
    body .features strong {font-weight: 500;}
    .other-teachers .row.links {
        display: block;
        width: 100%;
    }
    .other-teachers .row.links .col {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }
    .other-teachers .row.links .col .link-wrap {width: 50%;}
	.details .glsr-default, .glsr-summary-wrap {width: 100%;}
    @media only screen and (max-width: 1405px) {
        .pricing-section .plan h3 {font-size: 20px;}
        .pricing-section .button {
            font-size: 12px;
            letter-spacing: 0.1pt;
            padding: 0 12px;
        }
        .pricing-section .plan .price h2 {font-size: 25px;}
    }

    @media only screen and (max-width: 1280px) {
        .other-teachers h2 {margin: 0 0 30px;}
    }

    @media only screen and (max-width: 1280px) {
        .teacher-current .container,
        .other-teachers .container {margin-left: 0;}
    }

    @media only screen and (max-width: 1150px) {
        .teacher-current .container,
        .other-teachers .container {margin-right: 0;}
        .blue-sticky {
            display: flex;
            padding: 15px 34px;
            width: 400px;
            position: fixed;
            margin-top: 0;
            top: unset;
            left: unset;
            right: 32px;
            margin-bottom: 0;
            bottom: 19px;
            background: #6536D6;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }
        .blue-sticky .tutornamesur {color: black;}
        .sticky-flexcont img {display: flex;}
        .blue-sticky .glsr-tag-value {color: black;}
        .blue-sticky .glsr-summary-text,
        .blue-sticky .sticky-note {display: none;}
        .blue-sticky .button.smaller {
            font-size: 16px;
            min-width: 219px;
            text-align: center;
            background: #FFF;
            color: #000;
			padding: 8px 48px;
        }
        .blue-sticky h2 {
            margin-bottom: 5px;
            color: white;
            margin: 0 15px 11px;
        }
        .sticky_desc_block {display: none;}
        .sticky-title {font-size: 18px;}
        .sale_sticky {
            max-width: 71px;
            left: -23px;
            top: -38px;
            position: absolute;
            image-rendering: inherit;
        }
        header.sticky+.mobile-menu+.inner-page .teacher-card {
            flex: 0 0 350px;
            padding: 15px 65px 18px;
            position: -webkit-sticky;
            position: sticky;
        }
        header.sticky+.mobile-menu+.inner-page .teacher-card .photo,
        header.sticky+.mobile-menu+.inner-page .teacher-card .price-wrap,
        header.sticky+.mobile-menu+.inner-page teacher-card .glsr-summary-text,
        header.sticky+.mobile-menu+.inner-page .teacher-card .features {display: none;}
    }

    @media only screen and (max-width: 991px) {
        .teacher-card.additional .details h3,
        .teacher-card.additional .details .price-wrap,
        .teacher-card.additional .buttons-wrap {text-align: center;}
		.teacher-head .pricing-section {margin-bottom: 0;}
        .pricing-section .plan .plan-description {min-height: 0;}
        .pricing-section .plan h3 {font-size: 24px;}
        .pricing-section .plan {min-height: auto;}
        .pricing-section .button {
            font-size: 14px;
            letter-spacing: 0.2pt;
            padding: 0 24px;
        }
        .pricing-section .plan .price h2 {font-size: 35px;}
        .inner-page {padding-top: 80px;}
        .teacher-current .row {display: flex !important;}
    }

    @media only screen and (max-width: 980px) {
        .details .glsr-summary {
            justify-content: center;
            margin: auto;
        }
        .details .glsr-summary-text {text-align: center;}
    }
	
    @media only screen and (max-width: 750px) {
        .button-price.desktop-pad {display: none;}
        .pricing-section .col {max-width: 100%;display: block!important;}
        .pricing-section #nextBtn,
        .pricing-section #prevBtn {display: none !important;}
		.teacher-current .row {flex-direction: column;}
    }
	
    @media (max-width: 550px) {
        .teacher-card .details {padding-top: 0px;}
        #prevBtn, #nextBtn {display: none !important;}
        .slider_box_pricing .col {display: block !important;width: 100% !important;}
        .pricing-section .col {max-width: unset;}
        .button-price {margin-top: 5px;}
        .price-wrap .mobile {display: none;}
        .details .button.smaller {
            margin-bottom: 10px;
            font-size: 14px;
            text-transform: none;
            font-weight: 500;
            padding: 6px 12px;
        }
        .features {margin-top: 5px;}
        .teacher-card {margin-bottom: 30px;}
        .anchors {margin-bottom: 30px;}
        .marg-left26 {margin-left: 0;}
        body .teacher-current .bio-section .teachers-bio,
        .osvi-section,
        .padbot40 {padding-bottom: 15px;}
        .horizfl {margin-left: 0px;}
        .blue-sticky .horizfl {margin-bottom: 5px;}
        .blue-sticky .button.smaller {
            padding: 8px 10px;
            min-width: 100%;
        }
        body .flex-sta {margin-top: 15px;}
        .flex-sta .padleft5 {line-height: 133%;}
        .pricing-section {
            margin-bottom: 0;
            margin-top: 15px;
        }
		.tut-reviews.teachers-section {padding: 0;}
		.greeny {line-height: 15px;}
		#vidgu {margin-bottom: 15px;}
		#vidgu .horizfl {gap: 16px;}
		.glsr-review {padding: 20px 18px 17px;}
		.glsr-default .glsr-review {gap: 15px 6px;}
		.glsr-default .glsr-review-author {padding-top: 0;}
		.glsr-review .glsr-review-author .glsr-tag-value {line-height: 100%;}
		.glsr-default .glsr-review:last-child {margin-bottom: 30px;}
		.glsr-default .glsr-review-title h4 {line-height: 16px;}
        .tut-reviews {margin-bottom: 30px;}
        .pricing-section .plan h3 {font-size: 17px;}
        .pricing-section .plan .price h2 {font-size: 30px;}
        .pricing-section .plan .button {font-size: 12px;}
        .teacher-card.teacher-currr {margin: 0 7px 30px;}
        .title-flexcont {padding-top: 6px;}
        .teachers-osv h2 {margin-bottom: 0;}
        .marbot5 {margin-bottom: 0;}
        .teacher-card .details .price-wrap {margin-top: 7px;}
        .teachers-quali {padding-top: 15px;}
        .pricing-section h2 {margin-bottom: 30px;}
        .pricing-section .plan {padding: 21px 20px 28px;}
		.other-teachers {margin-top: 30px;}
        .other-teachers .row.links .col .link-wrap {width: 100%;}
    }
	
    @media only screen and (max-width: 540px) {
        html body .glsr-reviews {display: block;}
        .breadcrumbs-section {margin-bottom: 30px;}
        .sticky-title {
            font-size: 14px;
            font-weight: 400;
        }
    }

    @media only screen and (max-width: 520px) {
        .displ520 {display: block;}
        .hide520 {display: none;}
        body .teacher-card .photo {margin: 22px auto 9px auto;}
        .teacher-card .details {justify-content: center;}
        .horizfl {
            margin: 0 0 10px 26px;
            justify-content: flex-start;
            margin-left: 0px;
        }
        .teacher-card .details .price {
            margin-top: 5px;
            font-size: 14px;
            line-height: 17px;
        }
        .keywd {
            padding: 6px 8px;
            margin-right: 5px;
        }
        .title-flexcont .horizfl {
            margin: 0 0 8px;
            justify-content: center;
            flex-direction: row-reverse;
            gap: 3px;
        }
        .features strong {font-weight: 600;}
        .photoblock {padding: 0;}
        .tut-reviews .horizfl {margin: 0 0 10px 0;}
    }

    @media only screen and (max-width: 470px) {
        .single-anchor {
            padding: 4px 8px;
            font-size: 14px;
            line-height: 24px;
        }
        .marg-left26 p {line-height: 20px;}
        .blue-sticky {
            width: calc(100vw - 28px);
            right: 4px;
        }
        .title-flexcont {max-width: 244px;}
    }
</style>
<?php if (ICL_LANGUAGE_CODE == 'pl') {?>
<style>
.pricing-section .plan .plan-description {min-height: 140px;}
@media only screen and (max-width: 751px) {
	.teacher-current .row {display: block !important;}
	.pricing-section .col {max-width: unset;}
	.pricing-section .plan .plan-description {min-height: 0;}
}
</style>
<?php } ?>
<div class="inner-page">
    <div class="blue-sticky popdetails popteacher-card">

        <div class="sticky-flexcont">
            <img src="https://mathemastaging.wpengine.com/wp-content/uploads/2024/02/sale-sticky-1.png" class="sale_sticky" alt="">
            <div class="horizfl">
                <!--                <h2><span class="tutnamme tutornamesur">-->
                <?php //the_title(); 
                ?><!--</span></h2>-->
                <!--                <img src="/wp-content/uploads/2024/01/vector.png" alt="verified" width="17" height="17"/>-->

                <div class="sticky_body">
                    <h2 class="sticky-title"><?php switch (ICL_LANGUAGE_CODE) {
						case 'uk':
							?>Запишись на урок-діагностику за ціною 150 грн.<?php
							break;
						case 'pl':
							?>Zapisz się na lekcję-diagnostyczną w cenie 49 zł<?php
							break;
						case 'en':
							?>Sign up for a diagnostic lesson for 25 USD<?php
							break;
						case 'ru':
							?>Запишись на урок-діагностику за ціною 150 грн.<?php
							break;
						default:
							?>Запишись на урок-диагностику по цене 150 грн.<?php
						} ?></h2>
                    <div class="sticky_desc_block">
                        <div class="sticky_item">
                            <div class="sticky_item_img">
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.80469 27.0549C8.53125 27.0002 8.3125 26.9456 8.03906 26.8362C7.76562 26.7268 7.54688 26.6721 7.32812 26.5627C6.83594 26.344 6.39844 26.0706 5.96094 25.7424C5.08594 25.1409 4.375 24.3206 3.82812 23.3362C3.28125 22.4065 2.95313 21.3127 2.89844 20.2737C2.84375 19.7268 2.89844 19.2346 2.95312 18.6877C3.00781 18.4143 3.0625 18.1956 3.11719 17.9221C3.17188 17.6487 3.28125 17.4299 3.33594 17.1565L3.39062 17.9221C3.39062 18.1956 3.44531 18.4143 3.5 18.6877C3.55469 19.1799 3.66406 19.6721 3.77344 20.1096C3.99219 21.0393 4.32031 21.9143 4.8125 22.7346C5.30469 23.5549 5.85156 24.3206 6.5625 25.0315C6.89062 25.3596 7.27344 25.6877 7.65625 26.0159C7.82031 26.1799 8.03906 26.344 8.25781 26.5081L8.80469 27.0549ZM8.64062 29.0237C8.47656 29.1331 8.25781 29.1877 8.03906 29.2424C7.82031 29.2971 7.65625 29.3518 7.4375 29.3518C7.05469 29.4065 6.61719 29.4612 6.17969 29.4065C5.35938 29.3518 4.48438 29.1331 3.77344 28.7502C3.00781 28.3674 2.35156 27.7659 1.91406 27.0549C1.69531 26.7268 1.47656 26.344 1.3125 25.9612C1.25781 25.7971 1.20312 25.5784 1.14844 25.3596C1.14844 25.1956 1.09375 25.0315 1.09375 24.8127C1.25781 24.9768 1.36719 25.1409 1.47656 25.2502C1.64063 25.4143 1.75 25.5784 1.85938 25.6877C2.13281 25.9612 2.35156 26.2346 2.625 26.4534C3.17188 26.9456 3.71875 27.3831 4.375 27.7112C4.97656 28.0393 5.6875 28.3127 6.34375 28.5315C6.67188 28.6409 7.05469 28.6956 7.4375 28.8049C7.60156 28.8596 7.82031 28.8596 7.98438 28.9143C8.25781 28.969 8.42188 28.969 8.64062 29.0237ZM21 2.44556C21.2734 2.50024 21.4922 2.60962 21.7656 2.71899C22.0391 2.82837 22.2578 2.93774 22.4766 3.04712C22.9688 3.32056 23.4062 3.59399 23.8438 3.92212C24.7188 4.57837 25.4297 5.45337 25.9219 6.43774C26.4141 7.42212 26.6875 8.51587 26.6875 9.55493C26.6875 10.1018 26.6328 10.594 26.5234 11.1409C26.4688 11.4143 26.4141 11.6331 26.3047 11.9065C26.1953 12.1799 26.1406 12.3987 26.0312 12.6174L25.9766 11.8518C25.9766 11.5784 25.9766 11.3596 25.9219 11.0862L25.7578 9.60962C25.5938 8.67993 25.2656 7.75024 24.8281 6.87524C24.3906 6.00024 23.8438 5.23462 23.1875 4.52368C22.8594 4.14087 22.4766 3.81274 22.1484 3.42993C21.9844 3.26587 21.7656 3.10181 21.5469 2.93774L21 2.44556ZM25.7578 2.22681C25.9766 2.28149 26.1406 2.33618 26.3047 2.44556C26.4688 2.50024 26.6875 2.60962 26.8516 2.71899C27.1797 2.93774 27.5078 3.15649 27.8359 3.42993C28.4375 3.97681 28.9297 4.63306 29.2031 5.39868C29.5312 6.16431 29.6406 6.98462 29.5312 7.80493C29.4766 8.18774 29.3672 8.57056 29.2578 8.95337C29.2031 9.11743 29.0938 9.33618 29.0391 9.50024C28.9297 9.66431 28.875 9.82837 28.7109 9.99243V8.89868C28.7109 8.51587 28.6562 8.18774 28.6562 7.85962C28.5469 7.14868 28.4375 6.49243 28.1641 5.89087C27.8906 5.23462 27.5625 4.68774 27.1797 4.08618C26.9609 3.81274 26.7422 3.48462 26.5234 3.21118C26.4141 3.04712 26.3047 2.93774 26.1406 2.77368C26.0312 2.50024 25.8672 2.33618 25.7578 2.22681Z" fill="#42ADE2" />
                                    <path d="M5.46877 10.3752C4.37502 10.8674 3.99221 12.1799 4.48439 13.2737L11.375 27.6565L15.2031 25.8518L8.31252 11.4143C7.82033 10.3205 6.56252 9.82835 5.46877 10.3752ZM23.5703 21.8049L27.6172 19.8909L19.7422 3.4846C19.1953 2.39085 17.8828 1.89866 16.7344 2.44554C15.6406 2.99241 15.1485 4.30491 15.6953 5.45335L23.5703 21.8049Z" fill="#FFDD67" />
                                    <path d="M16.7891 2.39089C16.6797 2.44558 16.5703 2.50027 16.4609 2.60964C17.5 2.3362 18.5938 2.82839 19.0859 3.81277L26.9609 20.219L27.6719 19.8909L19.7969 3.48464C19.25 2.3362 17.9375 1.84402 16.7891 2.39089Z" fill="#EBA352" />
                                    <path d="M15.2031 25.7971L19.4141 23.7737L11.375 7.03931C10.8281 5.89087 9.40627 5.34399 8.25783 5.89087C7.1094 6.43774 6.61721 7.85962 7.16408 9.00806L15.2031 25.7971Z" fill="#FFDD67" />
                                    <path d="M8.25781 5.94553C8.14844 6.00021 8.03906 6.0549 7.92969 6.16428C8.96875 5.89084 10.1719 6.38303 10.6641 7.42209L15.6406 17.8674L16.8438 18.5783L11.375 7.09396C10.8281 5.89084 9.46094 5.39865 8.25781 5.94553Z" fill="#EBA352" />
                                    <path d="M18.7578 22.4612L22.9688 20.4378L14.9297 3.70338C14.3828 2.55495 12.961 2.00807 11.8125 2.60963C10.6641 3.15651 10.1719 4.57838 10.7188 5.72682L18.7578 22.4612Z" fill="#FFDD67" />
                                    <path d="M11.8125 2.5549C11.7031 2.60959 11.5938 2.71896 11.4844 2.77365C12.5234 2.50021 13.7266 2.9924 14.2188 4.03146L19.8516 15.844L21.0547 16.5549L14.9297 3.70334C14.3828 2.50021 12.9609 2.00803 11.8125 2.5549ZM5.46875 10.3752C5.35938 10.4299 5.25 10.4846 5.14062 10.594C6.125 10.3205 7.16406 10.8127 7.60156 11.7971L11.7031 20.383L12.9063 21.094L8.3125 11.469C7.82031 10.3205 6.5625 9.82834 5.46875 10.3752Z" fill="#EBA352" />
                                    <path d="M33.2499 8.73459C31.7734 7.58616 29.3671 8.84397 28.164 12.7815C27.3437 15.5158 27.2343 16.3362 25.4843 17.1565L24.4999 15.133C24.4999 15.133 8.96869 22.6252 9.57026 23.8283C9.57026 23.8283 11.4296 29.6252 14.6015 32.3049C19.3046 36.3518 30.2968 32.0315 30.789 21.5862C31.0624 15.5158 34.8359 9.99241 33.2499 8.73459Z" fill="#FFDD67" />
                                    <path d="M33.25 8.73462C32.9766 8.51587 32.6484 8.40649 32.3203 8.35181C32.375 8.40649 32.4844 8.40649 32.5391 8.46118C34.1797 9.71899 32.4844 12.6174 31.5547 15.2424C30.7891 17.3206 30.1328 19.4534 30.2422 21.5315C30.6797 30.6096 21.5469 34.9299 16.0781 33.2893C21.4375 35.5315 31.3906 31.2659 30.9531 21.8049C30.8437 19.7268 31.4453 17.7034 32.2656 15.5159C33.1406 12.8909 34.8359 9.99243 33.25 8.73462Z" fill="#EBA352" />
                                    <path d="M25.9766 16.9377C22.586 17.3206 17.6094 22.1877 21.1094 27.4924C18.5391 22.1331 22.75 18.5237 25.4297 17.2659C25.7032 17.0471 25.9766 16.9377 25.9766 16.9377Z" fill="#EBA352" />
                                </svg>
                            </div>
                            <h3 class="sticky_item_text"><?php switch (ICL_LANGUAGE_CODE) {
						case 'uk':
							?>знайомство з вчителем<?php
							break;
						case 'pl':
							?>Zapoznanie z nauczycielem<?php
							break;
						case 'en':
							?>Getting to know the teacher<?php
							break;
						case 'ru':
							?>Знакомство с учителем<?php
							break;
						default:
							?>знайомство з вчителем<?php
						} ?></h3>
                        </div>
                        <div class="sticky_item">
                            <div class="sticky_item_img">
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_721_2725)">
                                        <path d="M28.4978 32.4252C28.4978 34.0965 27.246 35.45 25.6999 35.45H7.86361C6.31924 35.45 5.06689 34.0959 5.06689 32.4252V5.15092C5.06689 3.47803 6.31978 2.12451 7.86361 2.12451H25.6999C27.246 2.12451 28.4978 3.47803 28.4978 5.15092V32.4252Z" fill="#F4AE7F" />
                                        <path d="M16.8979 6.2786C16.8979 6.59634 16.2646 6.85337 15.487 6.85337H6.47941C5.69957 6.85337 5.06738 6.59634 5.06738 6.2786V1.10517C5.06738 0.788525 5.69902 0.531494 6.47941 0.531494H15.487C16.2646 0.531494 16.8979 0.788525 16.8979 1.10517V6.2786Z" fill="#F4AE7F" />
                                        <path d="M29.8934 31.1565C29.8934 32.5745 28.629 33.7213 27.0677 33.7213H9.04323C7.48409 33.7213 6.21753 32.574 6.21753 31.1565V8.04006C6.21753 6.62311 7.48409 5.47522 9.04323 5.47522H27.0677C28.629 5.47522 29.8934 6.62366 29.8934 8.04006V31.1565Z" fill="#D0D2D3" />
                                        <path d="M29.8934 29.3485C29.8934 30.7665 28.629 31.9133 27.0677 31.9133H9.04323C7.48409 31.9133 6.21753 30.766 6.21753 29.3485V6.23208C6.21753 4.81513 7.48409 3.66833 9.04323 3.66833H27.0677C28.629 3.66833 29.8934 4.81568 29.8934 6.23208V29.3485Z" fill="white" />
                                        <path d="M23.5704 5.0596C23.5704 5.23023 22.7293 5.36914 21.6946 5.36914H9.71806C8.68118 5.36914 7.84009 5.23023 7.84009 5.0596V2.27328C7.84009 2.10101 8.68118 1.96375 9.71806 1.96375H21.6946C22.7293 1.96375 23.5704 2.10101 23.5704 2.27328V5.0596Z" fill="#D0D2D3" />
                                        <path d="M10.9759 10.3916H26.5957C27.6468 10.3916 27.6468 8.91504 26.5957 8.91504H10.9759C9.92861 8.91504 9.92861 10.3916 10.9759 10.3916ZM10.9759 13.3912H26.5957C27.6468 13.3912 27.6468 11.9157 26.5957 11.9157H10.9759C9.92861 11.9157 9.92861 13.3912 10.9759 13.3912ZM10.9759 16.4564H26.5957C27.6468 16.4564 27.6468 14.9799 26.5957 14.9799H10.9759C9.92861 14.9799 9.92861 16.4564 10.9759 16.4564ZM10.9759 19.4533H26.5957C27.6468 19.4533 27.6468 17.9779 26.5957 17.9779H10.9759C9.92861 17.9779 9.92861 19.4533 10.9759 19.4533ZM10.9759 25.2393H18.1662C19.214 25.2393 19.214 23.7632 18.1662 23.7632H10.9759C9.92861 23.7627 9.92861 25.2393 10.9759 25.2393Z" fill="#35494D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_721_2725">
                                            <rect width="35" height="35" fill="white" transform="translate(0 0.531494)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="sticky_item_text"><?php if (ICL_LANGUAGE_CODE == 'pl') {?>Pierwsza lekcja - diagnoza wiedzy<?php } else {?>перший урок - тестування знань<?php } ?></h3>
                        </div>
                        <div class="sticky_item">
                            <div class="sticky_item_img">
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 34.4377C26.5609 34.4377 33.9062 27.0924 33.9062 18.0315C33.9062 8.97057 26.5609 1.62524 17.5 1.62524C8.43908 1.62524 1.09375 8.97057 1.09375 18.0315C1.09375 27.0924 8.43908 34.4377 17.5 34.4377Z" fill="#98C0D0" />
                                    <path d="M17.5 31.1947C24.7698 31.1947 30.6632 25.3013 30.6632 18.0314C30.6632 10.7616 24.7698 4.86816 17.5 4.86816C10.2301 4.86816 4.33667 10.7616 4.33667 18.0314C4.33667 25.3013 10.2301 31.1947 17.5 31.1947Z" fill="#FCEBCD" />
                                    <path d="M13.754 4.64942C11.9985 5.15801 9.54033 5.93731 6.90986 9.07911C4.3122 12.1881 3.77626 15.8002 3.60947 18.2912C3.60947 18.2912 2.10829 20.1697 2.0372 19.8197C1.47118 17.099 2.61415 11.0178 5.60283 7.80215C9.08095 4.06153 13.6036 2.73536 15.2388 2.48653C15.5204 2.44278 14.2872 4.49629 13.754 4.64942Z" fill="#C2E3F0" />
                                    <path d="M17.5 30.4975C24.3847 30.4975 29.966 24.9162 29.966 18.0314C29.966 11.1467 24.3847 5.56543 17.5 5.56543C10.6152 5.56543 5.03394 11.1467 5.03394 18.0314C5.03394 24.9162 10.6152 30.4975 17.5 30.4975Z" fill="white" />
                                    <path d="M17.5 10.1018V18.0315" stroke="#563428" stroke-width="1.09375" stroke-miterlimit="10" stroke-linecap="round" />
                                    <path d="M17.5 19.4151C18.2642 19.4151 18.8836 18.7957 18.8836 18.0315C18.8836 17.2674 18.2642 16.6479 17.5 16.6479C16.7359 16.6479 16.1165 17.2674 16.1165 18.0315C16.1165 18.7957 16.7359 19.4151 17.5 19.4151Z" fill="#563428" />
                                    <path d="M11.6948 18.0723L17.4999 18.0315" stroke="#563428" stroke-width="1.64062" stroke-miterlimit="10" stroke-linecap="round" />
                                    <path d="M17.5 27.8752V29.2424M17.5 6.82056V8.18774M7.65625 18.0315H6.28906M28.7109 18.0315H27.3438" stroke="#6596A3" stroke-width="1.36719" stroke-miterlimit="10" />
                                    <path d="M12.5782 26.5573L11.8946 27.7413M23.1055 8.32178L22.4219 9.50576M22.4219 26.5573L23.1055 27.7413M11.8946 8.32178L12.5782 9.50576M26.0258 22.9534L27.2098 23.637M7.79028 12.4261L8.97427 13.1097M8.97427 22.9534L7.79028 23.637M27.2098 12.4261L26.0258 13.1097" stroke="#B0BEC5" stroke-width="0.820312" stroke-miterlimit="10" />
                                </svg>
                            </div>
                            <h3 class="sticky_item_text"><?php if (ICL_LANGUAGE_CODE == 'pl') {?>Trwa 45 minut<?php } else {?>триває 45 хвилин<?php } ?></h3>
                        </div>
                        <div class="sticky_item">
                            <div class="sticky_item_img">
                                <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_721_2687)">
                                        <path d="M4.33887 23.0255L21.7809 5.58789L29.9392 13.7484L12.4966 31.186L4.33887 23.0255Z" fill="#FFCE31" />
                                        <path d="M33.5234 3.04712L32.4844 2.00806C30.5156 0.0393066 27.3438 0.0393066 25.3203 2.00806L21.7656 5.56274L29.9688 13.7659L33.5234 10.2112C35.4922 8.24243 35.4922 5.01587 33.5234 3.04712Z" fill="#ED4C5C" />
                                        <path d="M19.5684 7.81042L21.8105 5.56714L29.9699 13.7265L27.7277 15.9692L19.5684 7.81042Z" fill="#93A2AA" />
                                        <path d="M20.4192 8.66083L22.6614 6.41809L29.0811 12.8373L26.8379 15.0795L20.4192 8.66083Z" fill="#C7D3D8" />
                                        <path d="M4.32031 23.0081L0.765625 32.3049L3.22656 34.7659L12.5234 31.2112L4.32031 23.0081Z" fill="#FED0AC" />
                                        <path d="M0.164146 33.9456C-0.328041 35.2581 0.328209 35.8596 1.64071 35.3674L6.12508 33.6721L1.91415 29.4612L0.164146 33.9456Z" fill="#333333" />
                                        <path d="M4.31494 23.049L19.5509 7.81311L22.2579 10.5201L7.02197 25.7561L4.31494 23.049Z" fill="#FFDF85" />
                                        <path d="M9.79126 28.4997L25.0272 13.2638L27.7342 15.9708L12.4983 31.2068L9.79126 28.4997Z" fill="#FF8736" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_721_2687">
                                            <rect width="35" height="35" fill="white" transform="translate(0 0.531494)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="sticky_item_text"><?php if (ICL_LANGUAGE_CODE == 'pl') {?>Praca diagnostyczna stworzona pod Twoje potrzeby<?php } else {?>тест створений під ваші потреби<?php } ?></h3>
                        </div>
                        <div class="sticky_item">
                            <div class="sticky_item_img">
                                <svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.4149 2.77719C31.4149 1.68173 30.3842 0.531494 29.3043 0.531494H15.8548C14.7749 0.531494 13.7441 1.68173 13.7441 2.77719V33.2858C13.7441 34.436 14.7749 35.5315 15.8548 35.5315H29.3534C30.3842 35.5315 31.464 34.3813 31.464 33.2858V2.77719H31.4149Z" fill="#5C6D6D" />
                                    <path d="M30.924 32.8476C30.924 33.9431 29.9422 35.0385 28.9605 35.0385H16.1983C15.2166 35.0385 14.2349 33.9431 14.2349 32.8476V3.27015C14.2349 2.17469 15.2166 1.07922 16.1983 1.07922H28.9605C29.9422 1.07922 30.924 2.17469 30.924 3.27015V32.8476Z" fill="#212528" />
                                    <path d="M28.2243 3.54407C28.4953 3.54407 28.7151 3.29884 28.7151 2.99634C28.7151 2.69384 28.4953 2.44861 28.2243 2.44861C27.9532 2.44861 27.7334 2.69384 27.7334 2.99634C27.7334 3.29884 27.9532 3.54407 28.2243 3.54407Z" fill="#94989B" />
                                    <path d="M24.0521 2.99628C24.0521 3.1606 24.003 3.27014 23.9048 3.27014H21.2542C21.156 3.27014 21.1069 3.1606 21.1069 2.99628C21.1069 2.88673 21.156 2.72241 21.2542 2.72241H23.9048C24.003 2.72241 24.0521 2.88673 24.0521 2.99628Z" fill="#94989B" />
                                    <path d="M15.2166 4.91333H29.9422V31.2044H15.2166V4.91333Z" fill="#3E4347" />
                                    <path d="M24.4446 33.5049C24.4446 33.724 24.2974 33.9431 24.0519 33.9431H21.1068C20.9105 33.9431 20.7141 33.7788 20.7141 33.5049V32.6833C20.7141 32.4642 20.8614 32.2451 21.1068 32.2451H24.0519C24.2483 32.2451 24.4446 32.4094 24.4446 32.6833V33.5049Z" fill="#94989B" />
                                    <path d="M18.6525 8.58322C18.6525 8.85709 18.4562 9.02141 18.2598 9.02141H16.64C16.3946 9.02141 16.2473 8.80231 16.2473 8.58322V6.77571C16.2473 6.50184 16.4437 6.33752 16.64 6.33752H18.2598C18.5053 6.33752 18.6525 6.55662 18.6525 6.77571V8.58322Z" fill="#42ADE2" />
                                    <path d="M22.0885 8.58322C22.0885 8.85709 21.8922 9.02141 21.6959 9.02141H20.076C19.8306 9.02141 19.6833 8.80231 19.6833 8.58322V6.77571C19.6833 6.50184 19.8797 6.33752 20.076 6.33752H21.6959C21.9413 6.33752 22.0885 6.55662 22.0885 6.77571V8.58322Z" fill="#C7E755" />
                                    <path d="M25.5243 8.58322C25.5243 8.85709 25.328 9.02141 25.1316 9.02141H23.5118C23.2664 9.02141 23.1191 8.80231 23.1191 8.58322V6.77571C23.1191 6.50184 23.3155 6.33752 23.5118 6.33752H25.1316C25.3771 6.33752 25.5243 6.55662 25.5243 6.77571V8.58322Z" fill="#F2B200" />
                                    <path d="M28.9606 8.58322C28.9606 8.85709 28.7643 9.02141 28.5679 9.02141H26.9481C26.7027 9.02141 26.5554 8.80231 26.5554 8.58322V6.77571C26.5554 6.50184 26.7518 6.33752 26.9481 6.33752H28.5679C28.8134 6.33752 28.9606 6.55662 28.9606 6.77571V8.58322Z" fill="#42ADE2" />
                                    <path d="M18.6525 29.6709C18.6525 29.9447 18.4562 30.1091 18.2598 30.1091H16.64C16.3946 30.1091 16.2473 29.89 16.2473 29.6709V27.8634C16.2473 27.5895 16.4437 27.4252 16.64 27.4252H18.2598C18.5053 27.4252 18.6525 27.6443 18.6525 27.8634V29.6709Z" fill="#C7E755" />
                                    <path d="M22.0885 29.6709C22.0885 29.9447 21.8922 30.1091 21.6959 30.1091H20.076C19.8306 30.1091 19.6833 29.89 19.6833 29.6709V27.8634C19.6833 27.5895 19.8797 27.4252 20.076 27.4252H21.6959C21.9413 27.4252 22.0885 27.6443 22.0885 27.8634V29.6709Z" fill="#FF435E" />
                                    <path d="M25.5243 29.6709C25.5243 29.9447 25.328 30.1091 25.1316 30.1091H23.5118C23.2664 30.1091 23.1191 29.89 23.1191 29.6709V27.8634C23.1191 27.5895 23.3155 27.4252 23.5118 27.4252H25.1316C25.3771 27.4252 25.5243 27.6443 25.5243 27.8634V29.6709Z" fill="#42ADE2" />
                                    <path d="M28.9606 29.6709C28.9606 29.9447 28.7643 30.1091 28.5679 30.1091H26.9481C26.7027 30.1091 26.5554 29.89 26.5554 29.6709V27.8634C26.5554 27.5895 26.7518 27.4252 26.9481 27.4252H28.5679C28.8134 27.4252 28.9606 27.6443 28.9606 27.8634V29.6709Z" fill="#C28FEF" />
                                    <path d="M18.6525 19.0996C18.6525 19.3734 18.4562 19.5378 18.2598 19.5378H16.64C16.3946 19.5378 16.2473 19.3187 16.2473 19.0996V17.2921C16.2473 17.0182 16.4437 16.8539 16.64 16.8539H18.2598C18.5053 16.8539 18.6525 17.073 18.6525 17.2921V19.0996Z" fill="#C7E755" />
                                    <path d="M22.0885 19.0996C22.0885 19.3734 21.8922 19.5378 21.6959 19.5378H20.076C19.8306 19.5378 19.6833 19.3187 19.6833 19.0996V17.2921C19.6833 17.0182 19.8797 16.8539 20.076 16.8539H21.6959C21.9413 16.8539 22.0885 17.073 22.0885 17.2921V19.0996Z" fill="#C28FEF" />
                                    <path d="M25.5243 19.0996C25.5243 19.3734 25.328 19.5378 25.1316 19.5378H23.5118C23.2664 19.5378 23.1191 19.3187 23.1191 19.0996V17.2921C23.1191 17.0182 23.3155 16.8539 23.5118 16.8539H25.1316C25.3771 16.8539 25.5243 17.073 25.5243 17.2921V19.0996Z" fill="#42ADE2" />
                                    <path d="M18.6525 15.5942C18.6525 15.8681 18.4562 16.0324 18.2598 16.0324H16.64C16.3946 16.0324 16.2473 15.8133 16.2473 15.5942V13.7867C16.2473 13.5128 16.4437 13.3485 16.64 13.3485H18.2598C18.5053 13.3485 18.6525 13.5676 18.6525 13.7867V15.5942Z" fill="#FF435E" />
                                    <path d="M22.0885 15.5942C22.0885 15.8681 21.8922 16.0324 21.6959 16.0324H20.076C19.8306 16.0324 19.6833 15.8133 19.6833 15.5942V13.7867C19.6833 13.5128 19.8797 13.3485 20.076 13.3485H21.6959C21.9413 13.3485 22.0885 13.5676 22.0885 13.7867V15.5942Z" fill="#F2B200" />
                                    <path d="M25.5243 15.5942C25.5243 15.8681 25.328 16.0324 25.1316 16.0324H23.5118C23.2664 16.0324 23.1191 15.8133 23.1191 15.5942V13.7867C23.1191 13.5128 23.3155 13.3485 23.5118 13.3485H25.1316C25.3771 13.3485 25.5243 13.5676 25.5243 13.7867V15.5942Z" fill="#C7E755" />
                                    <path d="M28.9606 15.5942C28.9606 15.8681 28.7643 16.0324 28.5679 16.0324H26.9481C26.7027 16.0324 26.5554 15.8133 26.5554 15.5942V13.7867C26.5554 13.5128 26.7518 13.3485 26.9481 13.3485H28.5679C28.8134 13.3485 28.9606 13.5676 28.9606 13.7867V15.5942Z" fill="#F2B200" />
                                    <path d="M18.6525 12.0886C18.6525 12.3625 18.4562 12.5268 18.2598 12.5268H16.64C16.3946 12.5268 16.2473 12.3077 16.2473 12.0886V10.2811C16.2473 10.0072 16.4437 9.8429 16.64 9.8429H18.2598C18.5053 9.8429 18.6525 10.062 18.6525 10.2811V12.0886Z" fill="#C28FEF" />
                                    <path d="M22.0885 12.0886C22.0885 12.3625 21.8922 12.5268 21.6959 12.5268H20.076C19.8306 12.5268 19.6833 12.3077 19.6833 12.0886V10.2811C19.6833 10.0072 19.8797 9.8429 20.076 9.8429H21.6959C21.9413 9.8429 22.0885 10.062 22.0885 10.2811V12.0886Z" fill="#42ADE2" />
                                    <path d="M25.5243 12.0886C25.5243 12.3625 25.328 12.5268 25.1316 12.5268H23.5118C23.2664 12.5268 23.1191 12.3077 23.1191 12.0886V10.2811C23.1191 10.0072 23.3155 9.8429 23.5118 9.8429H25.1316C25.3771 9.8429 25.5243 10.062 25.5243 10.2811V12.0886Z" fill="#FF435E" />
                                    <path d="M28.9606 12.0886C28.9606 12.3625 28.7643 12.5268 28.5679 12.5268H26.9481C26.7027 12.5268 26.5554 12.3077 26.5554 12.0886V10.2811C26.5554 10.0072 26.7518 9.8429 26.9481 9.8429H28.5679C28.8134 9.8429 28.9606 10.062 28.9606 10.2811V12.0886Z" fill="#C28FEF" />
                                    <path d="M17.6708 18.0589L8.29546 7.59729V12.5269H0V23.591H8.29546V28.5206L17.6708 18.0589Z" fill="#F2B200" />
                                </svg>
                            </div>
                            <h3 class="sticky_item_text"><?php if (ICL_LANGUAGE_CODE == 'pl') {?>Raport od nauczyciela po 60 minutach<?php } else {?>звіт від вчителя через 60 хвилин<?php } ?></h3>
                        </div>
                        <div class="sticky_item">
                            <div class="sticky_item_img">
                                <svg width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0.531494H31.3657V35.5315H0V0.531494Z" fill="white" />
                                    <path d="M28.7682 3.43005H26.0237L18.2803 14.4769L13.5755 8.35193L0 30.3363V35.5316H3.13657L14.0165 17.8676L18.5254 23.6644L28.7682 9.00818V3.43005Z" fill="#52C18E" />
                                    <path d="M31.3657 0.531494H0V28.2581L1.47027 25.9065H1.02919V18.6331H5.93007L6.66521 17.4846H1.02919V10.1565H7.54737V16.0081L8.57655 14.3127V10.1565H11.125L11.8601 9.00806H8.57655V1.67993H15.0947V8.62524L16.2709 10.1565H19.9466L20.7798 9.00806H16.1729V1.67993H22.6911V6.21899L23.7203 4.74243V1.67993H30.2385V8.95337H29.6994V9.39087L29.2093 10.1018H30.2385V17.3752H24.1614L22.7401 19.4534V25.8518H16.2219V22.4065L15.1928 21.0393V25.7971H10.3899L9.65475 26.9456H15.1928V34.219H8.62556V28.6956L7.59638 30.3909V34.3831H5.14593L4.4108 35.5315H31.3657V0.531494ZM7.59638 9.00806H1.02919V1.67993H7.54737C7.59638 1.67993 7.59638 9.00806 7.59638 9.00806ZM22.7401 34.3831H16.2219V27.0549H22.7401V34.3831ZM30.3365 34.3831H23.7693V27.0549H30.2875V34.3831H30.3365ZM30.3365 25.9065H23.7693V18.6331H30.2875V25.9065H30.3365Z" fill="#D0D5D8" />
                                </svg>
                            </div>
                            <h3 class="sticky_item_text"><?php if (ICL_LANGUAGE_CODE == 'pl') {?>Dalszy plan pracy<?php } else {?>подальший план роботи<?php } ?></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--<div class="sticky-rating"><?php //echo do_shortcode('[site_reviews_summary assigned_posts="post_id" hide="if_empty,bars"]'); 
                                        ?></div> -->
        <div class="buttons-wrap">
            <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
                <span class="button smaller tutpopup" onclick="PopupFunction(this);">Зареєструватись</span>
            <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                <span class="button smaller tutpopup" onclick="PopupFunction(this);">Zarezerwuj lekcję</span>
            <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                <span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронировать урок</span>
            <?php } else { ?>
                <span class="button smaller tutpopup" onclick="PopupFunction(this);">Зареєструватись</span>
            <?php } ?>
        </div>
        <!--        --><?php //if (ICL_LANGUAGE_CODE == 'uk') { 
                        ?>
        <!--            <div class="sticky-note">*вартість першого уроку - 150 грн.</div>--><?php //} 
                                                                                            ?>
        <div style="display: none;">
            <span data-nosnippet>ID:
                <strong class="tutid"><?php the_field('tut_id'); ?></strong></span>
            <?php if (has_post_thumbnail()) { ?>
                <div class="photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post); ?>');background-size: cover;"></div>
            <?php } else { ?>
                <div class="photo tutor-place-photo"></div>
            <?php } ?>
        </div>
    </div>
    <div class="teacher-current">
        <div class="container popdetails popteacher-card">
            <div class="breadcrumbs-section">
                <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
				<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
                        <p><a href="/">Mathema.me</a><span class="separator"> &gt; </span><a href="/tutors/">Репетитори</a><span class="separator"> &gt; </span><span class="last"><?php the_title(); ?></span></p>
				<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                        <p><a href="/">Mathema.me</a><span class="separator"> &gt; </span><a href="/pl/tutors/">Korepetytorzy</a><span class="separator"> &gt; </span><span class="last"><?php the_title(); ?></span></p>
                <?php } else { ?>
                        <p><a href="/">Mathema.me</a><span class="separator"> &gt; </span><a href="/ru/repetitory-matematika-onlajn/">Репетиторы</a><span class="separator"> &gt; </span><span class="last"><?php the_title(); ?></span></p>
                <?php } ?>
				</nav>
            </div>
            <div class="row">
                <div class="teacher-head">
                    <div class="teacher-card teacher-currr">
                        <div class="photoblock">
                            <?php if (has_post_thumbnail()) { ?>
                                <div class="photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post); ?>');background-size: cover;"></div>
                            <?php } else { ?>
                                <div class="photo tutor-place-photo"></div>
                            <?php } ?>
                            <div class="hide520">
								<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
									<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" text="на основі {num} відгуків" hide="if_empty,bars"]'); ?>
								<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
									<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" text="na podstawie {num} opinii" hide="if_empty,bars"]'); ?>
								<?php } else { ?>
									<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" text="based on {num} reviews" hide="if_empty,bars"]'); ?>
								<?php } ?>	
							</div>
                        </div>
                        <div class="details ">
                                <div class="title-flexcont">
                                    <div>
                                        <div class="horizfl">
                                            <h1><span id="tutornamesur" class="tutnamme"><?php the_title(); ?></span></h1>
                                            <!--                                <img src="/wp-content/uploads/2024/01/vector.png" alt="verified" width="17"-->
                                            <!--                                     height="17"/>-->
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.00232 0.000366211C10.1241 0.000366211 12.1589 0.843221 13.6592 2.34351C15.1595 3.8438 16.0023 5.87863 16.0023 8.00037C16.0023 10.1221 15.1595 12.1569 13.6592 13.6572C12.1589 15.1575 10.1241 16.0004 8.00232 16.0004C5.88059 16.0004 3.84576 15.1575 2.34547 13.6572C0.845174 12.1569
                                     0.00231934 10.1221 0.00231934 8.00037C0.00231934 5.87863 0.845174 3.8438 2.34547 2.34351C3.84576 0.843221 5.88059 0.000366211 8.00232 0.000366211ZM11.8573 3.34037L6.71732 9.27037L4.14732 6.87037L2.80732 8.12037L6.04732 12.6604H7.38732L13.1973 4.28037L11.8573 3.34037Z" fill="#057A55" />
                                            </svg>
                                        </div>
                                            <div class="displ520">
												<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
													<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" text="на основі {num} відгуків" hide="if_empty,bars"]'); ?>
												<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
													<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" text="na podstawie {num} opinii" hide="if_empty,bars"]'); ?>
												<?php } else { ?>
													<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id" text="based on {num} reviews" hide="if_empty,bars"]'); ?>
												<?php } ?>	
											</div>
                                            <div class="price-wrap  mobile">
                                                <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
                                                    <div class="price"><?php $terms = get_the_terms($post->ID, 'tsina');
                                                                        echo join(', ', wp_list_pluck($terms, 'name'));
                                                                        ?> грн./год
                                                    </div>
                                                <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                    <div class="price"><?php the_field('price_for_hour') ?> zl./god</div>
                                                <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                                    <div class="price"><?php $terms = get_the_terms($post->ID, 'tsina');
                                                                        echo join(', ', wp_list_pluck($terms, 'name'));
                                                                        ?> грн./час
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="price"><?php $terms = get_the_terms($post->ID, 'tsina');
                                                                        echo join(', ', wp_list_pluck($terms, 'name'));
                                                                        ?> грн./год
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="button-price mobile">
                                                <div class="buttons-wrap">
                                                    <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
                                                        <span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронювати урок</span>
                                                    <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                        <span class="button smaller tutpopup" onclick="PopupFunction(this);">Zarezerwuj lekcję</span>
                                                    <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                                        <span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронировать урок</span>
                                                    <?php } else { ?>
                                                        <span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронювати урок</span>
                                                    <?php } ?>

                                                </div>

                                            </div>
                                            <!-- <div class="bio">
											<?php the_excerpt(); ?>
										</div> -->
                                                <ul class="features">
                                                    <li style="display: none;">
                                                        <span data-nosnippet>ID:
                                                            <strong class="tutid"><?php the_field('tut_id'); ?></strong></span>
                                                    </li>
                                                    <?php $terms = get_the_terms($post->ID, 'klasi');
                                                    if ($terms) { ?>
                                                        <li>
                                                            <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Класи: <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Klasy: <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Классы: <?php } ?></strong>
															<?php $klasses = join(', ', wp_list_pluck($terms, 'name'));
															$klasses = str_replace(", для дорослих", "",$klasses );
															$klasses = str_replace(", для студентів", "",$klasses );
															$klasses = str_replace(", підготовка до школи", "",$klasses );
															$klasses = str_replace("для дорослих, ", "",$klasses );
															$klasses = str_replace("підготовка до школи, ", "",$klasses );
															$klasses = str_replace("для студентів, ", "",$klasses );
															echo $klasses; ?>
                                                        </li><?php } ?>
                                                    <?php $terms = get_the_terms($post->ID, 'ispiti');
													if ($terms) { ?>
                                                        <li>
                                                            <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Іспити: <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Egzaminy: <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Испити: <?php } ?></strong>
															<?php echo join(', ', wp_list_pluck($terms, 'name')); ?>
                                                        </li><?php } ?>
													<?php $terms = get_the_terms($post->ID, 'repetitorskii_stazh');
                                                    if ($terms) { ?>
                                                        <li>
                                                            <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Стаж: <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Staż: <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Стаж: <?php } ?></strong>
															<?php echo join(', ', wp_list_pluck($terms, 'name')); ?>
                                                        </li><?php } ?>
                                                    <?php if (get_field('kilkist_urokiv') && (get_field('kilkist_urokiv') != "")) { ?>
                                                        <li>
                                                            <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Кількість проведених уроків: <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Liczba przeprowadzonych lekcji: <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Количество проведенных уроков: <?php } ?></strong>
															<?php the_field('kilkist_urokiv'); ?>
                                                        </li><?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="button-price desktop-pad">
                                            <div class="buttons-wrap">
                                                <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
                                                    <span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронювати урок</span>
                                                <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                    <span class="button smaller tutpopup" onclick="PopupFunction(this);">Zarezerwuj lekcję</span>
                                                <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                                    <span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронировать урок</span>
                                                <?php } else { ?>
                                                    <span class="button smaller tutpopup" onclick="PopupFunction(this);">Забронювати урок</span>
                                                <?php } ?>
                                            </div>
                                            <div class="price-wrap">
                                                <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
                                                    <div class="price"><?php $terms = get_the_terms($post->ID, 'tsina');
                                                                        echo join(', ', wp_list_pluck($terms, 'name')); ?> грн./год
                                                    </div>
                                                <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                    <div class="price"><?php $terms = get_the_terms($post->ID, 'tsina');
                                                                        echo join(', ', wp_list_pluck($terms, 'name')); ?> zl./god</div>
                                                <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                                                    <div class="price"><?php $terms = get_the_terms($post->ID, 'tsina');
                                                                        echo join(', ', wp_list_pluck($terms, 'name')); ?> грн./час</div>
                                                <?php } else { ?>
                                                    <div class="price"><?php $terms = get_the_terms($post->ID, 'tsina');
                                                                        echo join(', ', wp_list_pluck($terms, 'name')); ?> грн./год</div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="anchors">
                                    <?php if (get_field('education') != "") { ?><span class="anch-cover"><a class="single-anchor" href="#educ">
									<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Освіта<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Edukacja<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Образование<?php } ?>
									</a></span><?php } ?>
                                    <span class="anch-cover"><a class="single-anchor" href="#quali">
									<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Кваліфікація<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Kwalifikacja<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Квалификация<?php } ?>
									</a></span>
                                    <?php if ((get_field('kilkist_uchniv') != "") || (get_field('zavantazhenist') != "") || (get_field('godini_roboti') != "")) { ?>
                                        <span class="anch-cover"><a class="single-anchor" href="#dostu">
										<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Доступність репетитора<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Dostępność korepetytora<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Доступность репетитора<?php } ?>
										</a></span><?php } ?>
                                    <?php if ((get_field('tehnichni_instrumenti') != "") || (get_field('opis_provedennya_urokiv') != "") || (get_field('veb-zastosunki') != "")) { ?>
                                        <span class="anch-cover"><a class="single-anchor" href="#yak">
										<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Як проходить урок?<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Jak przebiega lekcja?<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Как проходит урок?<?php } ?>
										</a></span><?php } ?>
                                    <span class="anch-cover"><a class="single-anchor" href="#tari">
										<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Тарифи<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Stawki<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Тарифы<?php } ?>
									</a></span>
                                    <?php $ratingInfo = glsr_get_ratings(['assigned_posts' => 'post_id']); 
									if ($ratingInfo->ranking != 0) {?><span class="anch-cover"><a class="single-anchor" href="#vidgu">
										<?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Відгуки<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Opinie<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Отзывы<?php } ?>
									</a></span><?php } ?>
                                </div>

                                <div class="bio-section">
                                    <div class="teachers-bio greybotborder anch-bot-0">
                                            <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Про репетитора<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>O korepetytorze<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Про репетитора<?php } ?></h2>
                                        <div class="marg-left26">
                                            <?php the_content(); ?>
											<?php $terms = get_the_terms( $post->ID , 'hobi' );
														if ($terms){?>
															<strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Хобі: <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Hobby: <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Хобби: <?php } ?></strong>
															<?php echo join(', ', wp_list_pluck($terms, 'name'));?>
													<?php } ?>	
                                            <?php $terms = get_the_terms($post->ID, 'tutkeywords');
                                            if ($terms) {
                                            ?>
                                                <div class="keywds">
                                                    <?php foreach ($terms as $term) { ?>
                                                        <span class="keywd"><?php echo $term->name; ?></span>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
                                                <div class="more-inf">
                                                    <table>
                                                        <?php if (get_field('stat') && (get_field('stat') != "")) { ?>
                                                            <tr>
                                                                <td>
                                                                    <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Стать:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Płeć:<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Пол:<?php } ?></strong>
                                                                </td>
                                                                <td><?php the_field('stat'); ?>
                                                                </td>
                                                            </tr><?php } ?>
                                                        <?php if (get_field('age') && (get_field('age') != "")) { ?>
                                                            <tr>
                                                                <td>
                                                                    <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Вік:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Wiek:<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Возраст:<?php } ?></strong>
                                                                </td>
                                                                <td><?php the_field('age'); ?>
                                                                </td>
                                                            </tr><?php } ?>
                                                        <?php if (get_field('krana') && (get_field('krana') != "")) { ?>
                                                            <tr>
                                                                <td>
                                                                    <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Країна:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Kraj:<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Страна:<?php } ?></strong>
                                                                </td>
                                                                <td><?php the_field('krana'); ?>
                                                                </td>
                                                            </tr><?php } ?>
                                                        <?php $terms = get_the_terms($post->ID, 'tutors');
                                                        if ($terms) {
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Місто:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Miasto:<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Город:<?php } ?></strong>
                                                                </td>
                                                                <td><?php echo join(', ', wp_list_pluck($terms, 'name')); ?>
                                                                </td>
                                                            </tr><?php } ?>
                                                        <?php if (get_field('oblast') && (get_field('oblast') != "")) { ?>
                                                            <tr>
                                                                <td>
                                                                    <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Область:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Województwo:<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Область:<?php } ?></strong>
                                                                </td>
                                                                <td><?php the_field('oblast'); ?>
                                                                </td>
                                                            </tr><?php } ?>
                                                        <?php $terms = get_the_terms($post->ID, 'mova_vikladannya');
                                                        if ($terms) {
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Мови<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Języki<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Языки<?php } ?>:</strong>
                                                                </td>
                                                                <td><?php echo join(', ', wp_list_pluck($terms, 'name')); ?>
                                                                </td>
                                                            </tr><?php } ?>
                                                    </table>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if (get_field('education') != "") { ?>
                                    <div id="educ" class="actually-achor"></div>
                                    <div class="after-anchor"></div>
                                    <div class="padbot40"></div>
                                    <div class="osvi-section greybotborder anch-bot-0">
                                        <div class="teachers-osv">
                                                <?php if (get_field('education') && (get_field('education') != "")) { ?>
                                                    <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Освіта<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Edukacja<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Образование<?php } ?></h2>
                                                    <div class="marg-left26 marbot5">
                                                        <?php the_field('education'); ?>
                                                    </div><?php } ?>
                                                <?php $terms = get_the_terms($post->ID, 'kvalifikatsiya');
                                                if ($terms) {
                                                ?>
                                                    <div class="qualif marg-left26 marbot5">
                                                        <?php echo join(', ', wp_list_pluck($terms, 'name')); ?>
                                                    </div><?php } ?>
                                                <div class="horizfl marg-left26">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.00232 0.000366211C10.1241 0.000366211 12.1589 0.843221 13.6592 2.34351C15.1595 3.8438 16.0023 5.87863 16.0023 8.00037C16.0023 10.1221 15.1595 12.1569 13.6592 13.6572C12.1589 15.1575 10.1241 16.0004 8.00232 16.0004C5.88059 16.0004 3.84576 15.1575 2.34547 13.6572C0.845174 12.1569 0.00231934 10.1221 0.00231934 8.00037C0.00231934 5.87863 0.845174 3.8438 2.34547 2.34351C3.84576 0.843221 5.88059 0.000366211 8.00232 0.000366211ZM11.8573 3.34037L6.71732 9.27037L4.14732 6.87037L2.80732 8.12037L6.04732 12.6604H7.38732L13.1973 4.28037L11.8573 3.34037Z" fill="#057A55" />
                                                    </svg>
                                                    <span id="podtv" class="padleft5"><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Диплом підтверджено<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Dyplom potwierdzony<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Диплом подтверджен<?php } ?></span>
                                                </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                $terms1 = get_the_terms($post->ID, 'navchrivni');
                                if (!$terms1) {
                                    $terms1 = get_the_terms($post->ID, 'ispiti');
                                    if (!$terms1) {
                                        $terms1 = get_the_terms($post->ID, 'dodatkovi_predmeti');
                                        if (!$terms1) {
                                            $terms1 = get_the_terms($post->ID, 'navchalni_programi');
                                        }
                                    }
                                }
                                if ($terms1) {
                                ?>
                                    <div id="quali" class="actually-achor"></div>
                                    <div class="after-anchor"></div>
                                    <div class="padbot40"></div>
                                    <div class="quali-section greybotborder anch-bot-0">
                                        <div class="teachers-quali ">
                                                <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Кваліфікація репетитора<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Kwalifikacja korepetytora<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Квалификация репетитора<?php } ?></h2>
                                                <?php $terms = get_the_terms($post->ID, 'navchalni_programi');
                                                if ($terms) {
                                                ?>
                                                    <div class="marg-left26 topgreyborder">
                                                        <h4><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Навчальні програми<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Programy nauczania<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Учебные программы<?php } ?></h4>
                                                        <div class="proga programs_grid ">
                                                            <?php foreach ($terms as $term) { ?>
                                                                <div class="programs_column bluedotted"><?php echo $term->name; ?></div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php $terms = get_the_terms($post->ID, 'navchrivni');
                                                if ($terms) {
                                                ?>
                                                    <div class="marg-left26 topgreyborder">
                                                        <h4><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Рівні навчальних програм<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Poziomy programów nauczania<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Уровни учебных программ<?php } ?></h4>
                                                        <div class="proga programs_grid ">
                                                            <?php foreach ($terms as $term) { ?>
                                                                <div class="programs_column bluedotted"><?php echo $term->name; ?></div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php $terms = get_the_terms($post->ID, 'ispiti');
                                                if ($terms) {
                                                ?>
                                                    <div class="marg-left26 topgreyborder">
                                                        <h4><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Підготовка до іспитів/олімпіад з математики<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Przygotowanie do egzaminów/olimpiad z matematyki<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Подготовка к экзаменам/олимпиадам по математике<?php } ?></h4>
                                                        <div class="proga programs_grid ">
                                                            <?php foreach ($terms as $term) { ?>
                                                                <div class="programs_column bluedotted"><?php echo $term->name; ?></div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php $terms = get_the_terms($post->ID, 'dodatkovi_predmeti');
                                                if ($terms) {
                                                ?>
                                                    <div class="marg-left26 topgreyborder bottom_tutor_info">
                                                        <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Додаткові предмети, що викладає репетитор:<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Przedmioty dodatkowe prowadzone przez korepetytora:<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Дополнительные предметы, которые преподает репетитор:<?php } ?> </strong><?php echo join(', ', wp_list_pluck($terms, 'name')); ?>
                                                    </div><?php } ?>
                                                <?php if (get_field('robota_z_osoblivimi_ditmi') && (get_field('robota_z_osoblivimi_ditmi') != "") && (get_field('robota_z_osoblivimi_ditmi') != "ні")) { ?>
                                                    <div class="marg-left26 topgreyborder bottom_tutor_info">
                                                        <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Робота з дітьми з додатковими освітніми потребами<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Praca z dziećmi z dodatkowymi potrzebami edukacyjnymi<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Работа с детьми с дополнительными образовательными потребностями<?php } ?>: </strong><?php the_field('robota_z_osoblivimi_ditmi'); ?>
                                                    </div><?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>

                                <?php if ((get_field('pidgotovka_do_nmt') != "") || (get_field('najkrashhij') != "") || (get_field('serednij_rezultat_nmt') != "")) { ?>
                                    <div id="nmt" class="actually-achor"></div>
                                    <div class="after-anchor"></div>
                                    <div class="padbot40"></div>
                                    <div class="nmt-section">
                                        <div class="teachers-nmt">
                                                <?php if (get_field('pidgotovka_do_nmt') || (get_field('najkrashhij') != "") || (get_field('serednij_rezultat_nmt') != "")) { ?>
                                                    <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Підготовка до НМТ<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Przygotowanie do Matury<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Подготовка к НМТ<?php } ?></h2>
                                                    <div class="marg-left26 nmt-padd">
                                                        <h3><?php the_field('pidgotovka_do_nmt'); ?></h3>
                                                    </div>
                                                    <?php if (get_field('najkrashhij') && (get_field('najkrashhij') != "")) { ?>
                                                        <div class="horizfl marg-left26 marbot10 nmt-padding-none">
                                                            <img src="/wp-content/uploads/2024/01/mdi_medal.svg" alt="medal" width="20" height="20" />
                                                            <span class="padleft5"><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Найкращий учнівський результат - <?php the_field('najkrashhij'); ?> балів<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Najlepszy wynik ucznia - <?php the_field('najkrashhij'); ?> punktów<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Лучший результат ученика - <?php the_field('najkrashhij'); ?> баллов<?php } ?></span>
                                                        </div><?php } ?>
                                                    <?php if (get_field('serednij_rezultat_nmt') && (get_field('serednij_rezultat_nmt') != "")) { ?>
                                                        <div class="horizfl marg-left26 marbot5 nmt_padding_bottom">
                                                            <img src="/wp-content/uploads/2024/01/average.svg" alt="average" width="20" height="20" />
                                                            <span class="padleft5"><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Середній учнівський результат - <?php the_field('serednij_rezultat_nmt'); ?> балів<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Średni wynik ucznia - <?php the_field('serednij_rezultat_nmt'); ?> punktów<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Средний результат учеников - <?php the_field('serednij_rezultat_nmt'); ?> баллов<?php } ?></span>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ((get_field('kilkist_uchniv') != "") || (get_field('zavantazhenist') != "") || (get_field('godini_roboti') != "")) { ?>
                                    <div id="dostu" class="actually-achor"></div>
                                    <div class="after-anchor"></div>
                                    <div class="padbot40"></div>
                                    <div class="dost-section">
                                        <div class="teachers-dost">
                                                <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Доступність репетитора<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Dostępność korepetytora<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Доступность репетитора<?php } ?></h2>
                                                <?php if (get_field('kilkist_uchniv') && (get_field('kilkist_uchniv') != "")) { ?>
                                                    <div class="marg-left26 marbot10 nmt-padding-none">
                                                        <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Кількість активних учнів: </strong><?php the_field('kilkist_uchniv'); ?> учнів<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Liczba aktywnych uczniów: </strong><?php the_field('kilkist_uchniv'); ?> uczniów<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Количество активных учеников: </strong><?php the_field('kilkist_uchniv'); ?> учеников<?php } ?>
                                                    </div>
                                                <?php } ?>
                                                <?php $zava = get_field('zavantazhenist');
												if ($zava && ($zava != "")) { ?>
                                                    <div class="marg-left26 marbot10 nmt-padding-none">
                                                            <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Завантаженість<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Obciążenie<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Загруженность<?php } ?>: </strong>
															<?php if (($zava == "Висока завантаженість") || ($zava == "Wysokie obciążenie")) { ?>
                                                                <span class="zava-high">
                                                                <?php } else if (($zava == "Недоступний для бронювання") || ($zava == "Niedostępny dla rezerwacji")) { ?>
                                                                    <span class="zava-med">
                                                                    <?php } else { ?>
                                                                        <span class="zava-low">
                                                                        <?php } ?>
                                                                        <?php echo $zava; ?>
                                                                        </span>
                                                    </div><?php } ?>
                                                <?php if (get_field('godini_roboti') && (get_field('godini_roboti') != "")) { ?>
                                                    <div class="horizfl marg-left26 marbot10 flex-sta">
                                                        <img src="/wp-content/uploads/2024/01/cil_calendar.svg" alt="години роботи" width="20" height="20" />
                                                        <div class="padleft5"><strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Години роботи репетитора<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Godziny pracy korepetytora<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Часы работы репетитора<?php } ?>: </strong><br><?php the_field('godini_roboti'); ?></div>
                                                    </div><?php } ?>
                                        </div>
                                    </div>

                                <?php } ?>
                                <?php if ((get_field('tehnichni_instrumenti') != "") || (get_field('opis_provedennya_urokiv') != "") || (get_field('veb-zastosunki') != "")) { ?>
                                    <div id="yak" class="actually-achor"></div>
                                    <div class="after-anchor"></div>
                                    <div class="padbot40"></div>
                                    <div class="yak-section">
                                        <div class="teachers-yac">
                                            <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Як проходить урок?<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Jak przebiega lekcja?<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Как проходит урок?<?php } ?></h2>
                                            <div class="horizfl marg-left26 marbot10 nmt-padding-none lesson-one-video-title">
                                                <img src="/wp-content/uploads/2024/01/online.svg" alt="онлайн" width="25" height="17" />
                                                <div class="padleft5"><strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>уроки онлайн<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Lekcje online<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>уроки онлайн<?php } ?></strong></div>
                                            </div>
                                                <?php if (get_field('opis_provedennya_urokiv') && (get_field('opis_provedennya_urokiv') != "")) { ?>

                                                    <div class="marg-left26 marbot10 nmt-padding-none yak-pm">
                                                        <?php the_field('opis_provedennya_urokiv'); ?>
                                                    </div>
                                                    <?php if (get_field('tehnichni_instrumenti') && (get_field('tehnichni_instrumenti') != "")) { ?>
                                                        <div class="marg-left26 marbot10 nmt-padding-none yak-pm">
                                                            <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Технічні інструменти вчителя<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Techniczne narzędzia nauczyciela<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Технические инструменты учителя<?php } ?>: </strong><?php the_field('tehnichni_instrumenti'); ?>
                                                        </div><?php } ?>
                                                    <?php if (get_field('veb-zastosunki') && (get_field('veb-zastosunki') != "")) { ?>
                                                        <div class="marg-left26 marbot10 nmt-padding-none" style="color:#000">
                                                            <strong><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Веб-застосунки, що використовуються<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Wykorzystywane aplikacje webowe<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Веб-приложения, которые используются<?php } ?>:</strong> <?php the_field('veb-zastosunki'); ?>
                                                        </div><?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>


                                <div id="tari"></div>
                                <div class="after-anchor"></div>
                                <div class="padbot40"></div>
                                <div class="pricing-section">
                                    <div class="head">
                                        <div class="half-block">
                                            <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Тарифи<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Stawki<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Тарифы<?php } ?></h2>
                                        </div>
                                    </div>
                                    <div class="slider_box_pricing">
                                        <button id="prevBtn" style="background: none;border: none;cursor: pointer;image-rendering: inherit;" onclick="prevSlide()"><img src="https://mathemastaging.wpengine.com/wp-content/uploads/2024/02/button-prev.png" style="image-rendering: inherit;" alt="попередні"></button>
                                        <div class="row">

                                            <div class="col">
                                                <div class="plan">
                                                    <h3><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>10 уроків<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>10 lekcji<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>10 уроков<?php } ?></h3>
                                                    <div class="plan-description">
                                                        <p><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Підготуєтеся до контрольної або самостійної роботи<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Przygotuj się do kontroli lub samodzielnej pracy<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Подготовитесь к контрольной или самостоятельной работе<?php } ?></p>
                                                    </div>
                                                    <div class="price">
                                                        <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
                                                            <h2>114<span><b>zl./god</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                                            <h2>39<span><b>GPB/hour</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
                                                            <h2>39<span><b>GPB/hour</b></span></h2>
                                                        <?php else : ?>
                                                            <h2>390<span><b>грн./55 хв</b></span></h2>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if (ICL_LANGUAGE_CODE == 'gb') { ?>
                                                        <a href="<?php echo get_page_link('11079'); ?>" class="button button-plan-selection button-package">
                                                            Choose
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </a>
													<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                       <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Wybierz
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>	
                                                    <?php } else { ?>
                                                        <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Обрати
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="plan">
                                                    <h3><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>20 уроків<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>20 lekcji<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>20 уроков<?php } ?></h3>
                                                    <div class="plan-description">
                                                        <p><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Глибоко опрацюєте теми шкільної програми і теми, які даються вам складно<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Dokładnie przestudiujesz tematy programu szkolnego oraz tematy, które są dla Ciebie trudne<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Глубоко проработаете темы школьной программы и темы, которые даются вам сложно<?php } ?></p>
                                                    </div>
                                                    <div class="price">
                                                        <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
                                                            <h2>104<span><b>zl./god</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                                            <h2>35<span><b>GPB/hour</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
                                                            <h2>35<span><b>GPB/hour</b></span></h2>
                                                        <?php else : ?>
                                                            <h2>350<span><b>грн./55 хв</b></span></h2>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if (ICL_LANGUAGE_CODE == 'gb') { ?>
                                                        <a href="<?php echo get_page_link('11079'); ?>" class="button button-plan-selection button-package">
                                                            Choose
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </a>
													<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                       <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Wybierz
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>	
                                                    <?php } else { ?>
                                                        <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Обрати
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>
                                                    <?php } ?>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <?php /*BESTPLAN*/ ?>
                                                <div class="plan best-plan-block">
													<div class="best-plan">
                                                   <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Найкращий план<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Najlepsza oferta<?php } elseif (ICL_LANGUAGE_CODE == 'en') { ?>Best plan<?php } elseif (ICL_LANGUAGE_CODE == 'gb') { ?>Best plan<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Лучший план<?php } ?>
														</div>
                                                    <h3><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>30 уроків<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>30 lekcji<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>30 уроков<?php } ?></h3>
                                                    <div class="plan-description">
                                                        <p><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Закриєте слабкі місця, підготуєтеся до екзамену чи олімпіади<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Zamkniesz słabe punkty, przygotujesz się do egzaminu lub olimpiady<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Закроете слабые места, подготовитесь к экзамену или олимпиаде<?php } ?></p>
                                                    </div>
                                                    <div class="price">
                                                        <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
                                                            <h2>94<span><b>zl./god</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                                            <h2>31<span><b>GPB/hour</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
                                                            <h2>31<span><b>GPB/hour</b></span></h2>
                                                        <?php else : ?>
                                                            <h2>310<span><b>грн./55 хв</b></span></h2>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if (ICL_LANGUAGE_CODE == 'gb') { ?>
                                                        <a href="<?php echo get_page_link('11079'); ?>" class="button button-plan-selection button-package">
                                                            Choose
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </a>
													<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                       <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Wybierz
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>	
                                                    <?php } else { ?>
                                                        <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Обрати
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="plan">
                                                    <h3><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>60 уроків<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>60 lekcji<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>60 уроков<?php } ?></h3>
                                                    <div class="plan-description">
                                                        <p><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Станете чемпіоном з математики і без проблем вступите в улюблений вищий заклад<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Zostaniesz mistrzem matematyki i bez problemu dostaniesz się do ulubionej uczelni wyższej<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Станете чемпионом по математике и без проблем вступите в любимое высшее заведение<?php } ?></p>
                                                    </div>
                                                    <div class="price">
                                                        <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
                                                            <h2>84<span><b>zl./god</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                                            <h2>28<span><b>GPB/hour</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
                                                            <h2>28<span><b>GPB/hour</b></span></h2>
                                                        <?php else : ?>
                                                            <h2>280<span><b>грн./55 хв</b></span></h2>
                                                        <?php endif; ?>
                                                    </div>
                                                    <?php if (ICL_LANGUAGE_CODE == 'gb') { ?>
                                                        <a href="<?php echo get_page_link('11079'); ?>" class="button button-plan-selection button-package">
                                                            Choose
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </a>
													<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                       <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Wybierz
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>	
                                                    <?php } else { ?>
                                                        <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Обрати
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="plan">
                                                    <h3><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>100 уроків<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>100 lekcji<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>100 уроков<?php } ?></h3>
                                                    <div class="plan-description">
                                                        <p><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Отримаєте репетитора на весь навчальний рік<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Opiekę pedagogiczną otrzymasz na cały rok akademicki<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Получите репетитора на весь учебный год<?php } ?></p>
                                                    </div>
                                                    <div class="price">
                                                        <?php if (ICL_LANGUAGE_CODE == 'pl') : ?>
                                                            <h2>74<span><b>zl./god</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'en') : ?>
                                                            <h2>26<span><b>GPB/hour</b></span></h2>
                                                        <?php elseif (ICL_LANGUAGE_CODE == 'gb') : ?>
                                                            <h2>26<span><b>GPB/hour</b></span></h2>
                                                        <?php else : ?>
                                                            <h2>260<span><b>грн./55 хв</b></span></h2>
                                                        <?php endif; ?>
                                                    </div>
                                                   <?php if (ICL_LANGUAGE_CODE == 'gb') { ?>
                                                        <a href="<?php echo get_page_link('11079'); ?>" class="button button-plan-selection button-package">
                                                            Choose
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </a>
													<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                                                       <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Wybierz
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>	
                                                    <?php } else { ?>
                                                        <span class="button button-plan-selection button-package tutpopup" onclick="PopupFunction(this)">
                                                            Обрати
                                                            <div class="icon">
                                                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28815 0.931987C5.05771 0.720746 4.69965 0.736314 4.48841 0.966758C4.27716 1.1972 4.29273 1.55526 4.52318 1.7665L7.97879 4.93415L0.566038 4.93414C0.253423 4.93414 0 5.18757 0 5.50018C0 5.8128 0.253423 6.06622 0.566038 6.06622L7.97879 6.06623L4.52318 9.23386C4.29273 9.4451 4.27716 9.80314 4.48841 10.0336C4.69965 10.264 5.05771 10.2796 5.28815 10.0684L9.81645 5.91744C9.93343 5.81023 10 5.65885 10 5.50019C10 5.34152 9.93343 5.19014 9.81645 5.08293L5.28815 0.931987Z" fill="white" />
                                                                </svg>
                                                            </div>
                                                        </span>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                        </div>
                                        <button id="nextBtn" style="background: none;border: none;cursor: pointer;image-rendering: inherit;" onclick="nextSlide()">
                                            <img src="https://mathemastaging.wpengine.com/wp-content/uploads/2024/02/button-next.png" style="image-rendering: inherit;" alt="next">
                                        </button>

                                    </div>
                                </div>
                        </div>
                    </div>
                <?php $ratingInfo = glsr_get_ratings(['assigned_posts' => 'post_id']); 
					if ($ratingInfo->ranking != 0) { ?>
				<div id="vidgu"></div>
                <div class="after-anchor"></div>
                <div class="padbot40"></div>
                <div class="tut-reviews teachers-section greybotborder">
                    <h2><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Відгуки<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Opinie<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Отзывы<?php } ?></h2>
                    <div class="horizfl marbot5">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.0023 2.00037C12.1241 2.00037 14.1589 2.84322 15.6592 4.34351C17.1595 5.8438 18.0023 7.87863 18.0023 10.0004C18.0023 12.1221 17.1595 14.1569 15.6592 15.6572C14.1589 17.1575 12.1241 18.0004 10.0023 18.0004C7.88059 18.0004 5.84576 17.1575 4.34547 15.6572C2.84517 14.1569 2.00232 12.1221 2.00232 10.0004C2.00232 7.87863 2.84517 5.8438 4.34547 4.34351C5.84576 2.84322 7.88059 2.00037 10.0023 2.00037ZM13.8573 5.34037L8.71732 11.2704L6.14732 8.87037L4.80732 10.1204L8.04732 14.6604H9.38732L15.1973 6.28037L13.8573 5.34037Z" fill="#057A55" />
                        </svg>

                        <div class="padleft5 greeny"><?php if (ICL_LANGUAGE_CODE == 'uk') { ?>Усі відгуки підтверджено 100%<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>Wszystkie opinie potwierdzone w 100%<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>Все отзывы подтверждены 100%<?php } ?></div>
                    </div>
                    <div class="">
                        <?php /*echo do_shortcode('[site_reviews_summary assigned_posts="post_id" hide="if_empty,rating,stars"]');*/
                        echo do_shortcode('[site_reviews assigned_posts="post_id" rating="4" schema="true" display="20" fallback="Відгуків поки немає."]'); ?>
                    </div>
                </div>
					<?php } ?>
			</div>		
        </div>



        </div>

        <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
            <script>
                function PopupFunction(el) {
                    var tutname = jQuery(el).closest('.popdetails').find('.tutnamme');
                    jQuery('.tutpopname').text(tutname.text());
                    tutname = jQuery(el).closest('.popdetails').find('.tutid');
                    jQuery('input#input_6_7').val(tutname.text());
                    jQuery('.popuptopphoto').empty();
                    jQuery(el).closest('.popteacher-card').find('.photo').clone().appendTo(".popuptopphoto");
                }
            </script>
		<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
            <script>
                function PopupFunction(el) {
                    var tutname = jQuery(el).closest('.popdetails').find('.tutnamme');
                    if ((!tutname) || (tutname == "")) {
                        tutname = jQuery(el).closest('.details').find('#tutornamesur');
                    }
                    jQuery('.tutpopname').text(tutname.text());
                    tutname = jQuery(el).closest('.popdetails').find('.tutid');
                    jQuery('input#input_30_7').val(tutname.text());
                    jQuery('.popuptopphoto').empty();
                    jQuery(el).closest('.popteacher-card').find('.photo').clone().appendTo(".popuptopphoto");
                }
            </script>
        <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
            <script>
                function PopupFunction(el) {
                    var tutname = jQuery(el).closest('.popdetails').find('.tutnamme');
                    if ((!tutname) || (tutname == "")) {
                        tutname = jQuery(el).closest('.details').find('#tutornamesur');
                    }
                    jQuery('.tutpopname').text(tutname.text());
                    tutname = jQuery(el).closest('.popdetails').find('.tutid');
                    jQuery('input#input_28_7').val(tutname.text());
                    jQuery('.popuptopphoto').empty();
                    jQuery(el).closest('.popteacher-card').find('.photo').clone().appendTo(".popuptopphoto");
                }
            </script>
        <?php } ?>

        <script>

        </script>
        <script>
            jQuery(document).ready(function($) {
                $(".readmor").on("click", function() {
                    $(".readmor").addClass("glsr-review-assigned_links");
                    $(".add-text").addClass("show");
                });
            });
        </script>

        <script>
            let slideIndex = 1;
            let slidesToShow = 4;
            const slides = document.querySelectorAll(".slider_box_pricing .col");

            function reportWindowSize() {
                if (window.screen.width >= 751) {
                    showSlides();
                }
            }
            window.addEventListener("resize", reportWindowSize);

            function showSlides() {
                if ((window.screen.width >= 1240) || (window.screen.width <= 1150) || (window.screen.width <= 991)) {
                    slidesToShow = 4;
                }
                if (((window.screen.width <= 1239) && (window.screen.width >= 1151)) || (window.screen.width <= 870)) {
                    slidesToShow = 3;
                }
                if (window.screen.width <= 751) {
                    slidesToShow = slides.length;
                }
                let totalSlides = slides.length;
                let maxSlideIndex = 0;
                if (slidesToShow == slides.length - 1) {
                    maxSlideIndex = Math.ceil(totalSlides / slidesToShow) - 1;
                } else {
                    maxSlideIndex = Math.ceil(totalSlides / slidesToShow);
                }
                // Скрываем все слайды
                for (let i = 0; i < totalSlides; i++) {
                    slides[i].style.display = "none";
                }

                // Отображаем видимые слайды
                for (let i = slideIndex; i < Math.min(slideIndex + slidesToShow, totalSlides); i++) {
                    slides[i].style.display = "block";
                }

                // Скрываем кнопку "Next", если больше нет слайдов
                if (slideIndex === maxSlideIndex) {
                    document.getElementById("nextBtn").style.display = "none";
                } else {
                    document.getElementById("nextBtn").style.display = "block";
                }

                // Проверяем, нужно ли скрыть кнопку "Prev"
                if (slideIndex === 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "block";
                }
            }

            function prevSlide() {
                if (slideIndex > 0) {
                    slideIndex--;
                }
                showSlides();
            }

            function nextSlide() {
                let totalSlides = slides.length;
                let maxSlideIndex = Math.ceil(totalSlides / slidesToShow) - 1;

                if (slideIndex + slidesToShow < totalSlides) {
                    slideIndex++;
                }
                showSlides();
            }

            // Показываем первые слайды при загрузке страницы
            showSlides();
        </script>

    </div>
    <div class="other-teachers teachers-section">
        <div class="container">
            <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
                <h2>Iншi репетитори</h2>
            <?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
                <h2>Inni nauczyciele</h2>
            <?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
                <h2>Другие учителя</h2>
            <?php } else { ?>
                <h2>Iншi репетитори</h2>
            <?php } ?>
            <?php
            $links_keys = [];
            $terms_city = get_the_terms($post->ID, 'tutors');
            if ($terms_city) {
                foreach ($terms_city as $key => $item) {
                    $links_keys['city'][$key]['name'] = $item->name;
                    $links_keys['city'][$key]['slug'] = $item->slug;
                }
            }

            $terms_klasi = get_the_terms($post->ID, 'klasi');
            if ($terms_klasi) {
                foreach ($terms_klasi as $key => $item) {
                    $links_keys['grade'][$key]['name'] = $item->name;
                    $links_keys['grade'][$key]['slug'] = $item->slug;
                }

                $name  = array_column($links_keys['grade'], 'name');
                $slug = array_column($links_keys['grade'], 'slug');

                // Сортируем данные по полю name по возрастанию и по полю slug по возрастанию
                // Добавляем переменную $data в качестве последнего параметра, для сортировки по общему ключу
                array_multisort($name, SORT_ASC, $slug, SORT_ASC, $links_keys['grade']);
            }

            $terms_ispiti = get_the_terms($post->ID, 'ispiti');
            if ($terms_ispiti) {
                foreach ($terms_ispiti as $key => $item) {
                    $links_keys['exam'][$key]['name'] = $item->name;
                    $links_keys['exam'][$key]['slug'] = $item->slug;
                }
            }

            $terms_programy = get_the_terms($post->ID, 'navchalni_programi');
            if ($terms_programy) {
                foreach ($terms_programy as $key => $item) {
                    $links_keys['curriculum'][$key]['name'] = $item->name;
                    $links_keys['curriculum'][$key]['slug'] = $item->slug;
                }
            }


            if (!empty($links_keys)) {
            ?>
                <div class="row marg-left26 links">
                    <div class="col">
                        <?php
                        foreach ($links_keys as $key => $params) {
                            if (!empty($params)) {
                                foreach ($params as $param) {
                        ?>
                                    <div class="link-wrap">
                                        <?php if (ICL_LANGUAGE_CODE == 'uk') { ?>
											<a href="/tutors/<?php echo esc_attr($key) . '-' . esc_attr($param['slug']); ?>/">Репетитор з математики <?php echo esc_html($param['name']);
                                                                                                                                                    echo
                                                                                                                                                    $key == 'klasi' ? ' клас' : '' ?>
										<?php } elseif (ICL_LANGUAGE_CODE == 'pl') { ?>
											<a href="/pl/tutors/<?php echo esc_attr($key) . '-' . esc_attr($param['slug']); ?>/">Korepetytor matematyki <?php echo esc_html($param['name']);
                                                                                                                                                    echo
                                                                                                                                                    $key == 'klasi' ? ' klas' : '' ?>
										<?php } elseif (ICL_LANGUAGE_CODE == 'ru') { ?>
											<a href="/ru/tutors/<?php echo esc_attr($key) . '-' . esc_attr($param['slug']); ?>/">Репетитор по математике <?php echo esc_html($param['name']);
                                                                                                                                                    echo
                                                                                                                                                    $key == 'klasi' ? ' класс' : '' ?>
										<?php } ?>
										</a><br>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>
                    </div><!-- col -->
                </div><!-- row marg-left26 links -->
            <?php
            }
            ?>
        </div>
    </div>
</div><!-- inner page -->
<script>
/*jQuery(document).ready(function($){
    $('html[lang="pl-PL"] .readmor').text('Czytaj więcej');
});*/
</script>
<?php get_footer(); ?>