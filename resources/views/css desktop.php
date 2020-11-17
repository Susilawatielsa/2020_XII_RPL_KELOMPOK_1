

/*desktop version*/
@media (min-width: 992px) {
    /*navbar*/
    .navbar-brand, .nav-link{
        color: white !important;
        text-shadow: 2px 2px 5px grey;
    }

    .nav-link{
        text-transform: uppercase;
        margin-right: 30px;
    }

    .navbar img {
    width: 70px;
    height: 70px;
    }


    .navbar-brand {
    font-size: 32px;
    }

    .nav-link:hover::after{
        content: '';
        display: block;
        border-bottom: 3px solid blue;
        width: 50%;
        margin: auto;
        padding-bottom: 5px;
        margin-bottom: -8px;  
    }

    /*jumbotron*/
    .jumbotron{
        margin-top: -100px;
        margin-right: -100px;
        height: 100%;
    }

    .jumbotron .display-4{
        margin-top: 100px;
        font-size: 40px;
    }

    /*info panel*/
    .info-panel{
    margin-top: 100px;
    }

    /*wo*/
    .workingspace {
       text-align: right;
        margin-top: 10px;
    }

}