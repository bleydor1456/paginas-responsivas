<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog Personal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #f8f9fa;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .sidebar {
            margin-bottom: 20px;
        }

        .comments {
            margin-top: 20px;
        }

        .comments ul {
            list-style: none;
            padding: 0;
        }

        .comments ul li {
            margin-bottom: 10px;
        }

        @media (max-width: 767px) {
            body {
                padding-top: 110px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Mi Blog Personal</a>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Artículos recientes</h2>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEA0PDw0TFhARExgVDw4VFxUVFQ0QFRUWFhURFRgYHSggGBolGxYXITEhJSkrLi4uFyI0OTQtOCgtLisBCgoKDg0OGhAQGislHyItLS0rLS0rLS0tLS0tLS0tLS0tLS0tLS0tLS0rLS8tLS0tLS0tLS0tKy0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAAAgEDBwYFBP/EAEcQAAEDAgMEBQkFBAcJAAAAAAEAAgMEEQUhMQYSQVETImFxgQcUIzJScpGhsUJiwdHwNIKy0iQzQ5KiwvEVFjVEU5Ozw+H/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAxEQACAQIEBAQEBwEBAAAAAAAAAQIDEQQSITETQVFhInGBoTKRwdEUIzNCseHw8YL/2gAMAwEAAhEDEQA/ANQBTqkFOCvFTPVaAhQQrEhQ0IVQQmIUKWikyshKVaQlIUNFFZCgpioIUWKTEKUqwpSFIxClITlQVLRVxSEqYhBCgoRClQkMEIQgAQhCABCEIAEIQgAQhCABCEIA+4FOCqgUwK60znLgU6pBTgrVMhoCoIViQosIVQQmISqWUmKQkKsIVbyBmVDRRBCre8DUrmtodsYaa7GdeT2Rw7zwXK+cYliB6l2RnQi7Rbv1PhktoYWUlmlou5lOvFOy1fRHfVmOU8XrytHeQF5cu2lGP7W/cCfoF4lH5PietNMSTrbL5m5Xqx7B0o1BPe535p8PCx3k35ISlXeyS82OzbWjP9p8Q4fUL0aXH6aX1JmnsBC8uTYSlOjSP3nfmvLrPJ+NYpXA8L2I/NLJhZbSa8xqVdckzt2SNdoQmWZvp8SoDcOL2DvcLdxzHgvdwLbOOUhkw3HnLPRx7D+BWdTBySzQaku323LhiYt5ZKz7/R7HXISxvDhcFMuI6gQhCABCEIAEIQgAQhCABCEIA+oFMCqwVIK3TMWi0FOCqgUwK0TJLgU6pBTgrVMhoCFBCsSFAiqV4aCScgs42q2qkmk81o7kk7pe3W/FrfxPBfXt/tE4EUkBO+/JxGoByAHaV92xWy7adglkAMrhmfZHsjsXTThGnHiT1fJfUxnJzlki/Nnw7NbENbaWp6z9d05tafHU9pXaxQNYLNAC8XH9q4KNzWOuXH7LbEge0exezT1THtDg4ZrnrOpPxz57f0a01CPhjyLCFBTXUELmaN0xCFBTlIVIyqSMOyIXK7RbIRzBz4xuycxo73hxXUyztaDdwXO0u10L6h9OQWkEta42s8jUBa0eLFuVPkRU4bWWfM5jBcdmoZfN6q+4Mg457o534t+i0SnnbI0OabgryNpcCZVxkjJ4zY4cD+S5fZHF300po58rGzL/AGT7PcdQtqkI4iDqQVpLdde6MoSlRkoS2ez+hoaEA3F0LzjtBCEIAEIQgAQhCABCEIAtBTAqsFMCtEyCwFOCqgU4KtMhotBTAqoFOCtIyJLQV520OItpoJJXH1Wk9/YvuBWe+VGvNoqdv2jcjmG6D4kfBdNCOeaiYVZZYtnx7CYY6rqJKyYXs47vLeOp8BkF3W0WJNpIHyHgMhzPADxUbJ4cKemiYBmGi55nUn43XF+UqsdLNBSsOpuR2k7rfx+C3/WrW5fRGSfCp9/qeBRYPV4i59QLXLvWJIzHBuWg08F6Z2dxWPNs5NuG+78RZaJgGHtp4I2NGQaP9V9xe3mEp4uV9EreQ44eNtW7mWNx7EqM+njLmjUkf5m5DxC6nAdsYKmzXHdk9h3Hu5rpZqZkgILQVxG0mw7XXlpeq/XdGTXH/Ke0KM9GrpJZX1W3qVlqQ1i7roz3sa2jgpW3c8XPqtGZd3BcVU7VVtW4tpYiBzAuR3n1Qr8D2Mmmf0lbf3Cbk29ojh2Bd7R4dFC0NYwADSwtZJujR2WZ+w1xKnPKvczpmzuJTZyTkX4bzvoLBfFiWydVC10pcHbuZIvvZcQtaL2jiFXURB7SOBClY6onol8kN4WD6/M5rYrGvOYd159IzJ3byd4/mvK8oGEW3amMWc31iOV8j4H8V5mG3ocSdHox5sB2HNvwNwtDxKnE0L2kXDm6cwQlUaoV1Uhs9fR7ocFxaThLdaevU8vZLFPOYGE+sMnDk4a/rtXuLOth5zBVTUzjxNu9ptfxFvgtGXNi6Sp1Wls9V5M2w83Omm99mKhSoXKdAIQhAAhCEACEIQAwKkFIEwKYhwUwKrBTAq0yS0FMCqgU4KtMhosDll20R6fFoYzo0ty7iXn5ALTicisvlyxoX9rL/tLvwe8n0izlxO0V1aNVgG6wDkFl1R6bGgDo1w+TL/UrUGnq+Cy4Ho8aN/tOy8Y//ivCu+byZNdfD5mhY/UmCllkbqxhI7w0lZdhjsSqg6SKocbGxu62dgdLW4rW8RpRPC+M6OaQe4hZTQ1k+DzvjkjLo3HI6b33mnS9tQtMP8LSSv3IrfEnJ6H10W1NbRyNZWMJadXEAEDmLZOWl0swkY140Iusm2r2kjrWsa2Igg33jYcCLZHtWh7FOJoqa/8A02/whRiafgU3Gz5lUJ+JxvdHsOyBKz/aTa2YzGmpG3cDYutfPkB+K72t9R/csdwnFm0tVPK9hdd7hla465J1WeFpKWZ2vbZFV6jVle1+Z9lXHijWOmllc1oFzmAbDsaLLrdgcQknp/SuLnNcRvHUjh9Vy2ObTyVwFPTxO62RGVyOVhoO0rttkMINLTtY71jm73jmfy8Fpib8K00k29LdCaOtTwttW9zj9vWdHWU8g1/lcD+K0KlN429yz7yiO3qmmYNc/wDE5oC0KhbaNncufEfo0/J/ybUf1J+n8Gb146HFmEfacP8AEC36haTHmAexZztX/wASp7a3j/8AIVo0A6re5Ti9YU32Kw+kprv9BiEqYhQQuA6hUKVCQwQhCABCEIAUFMEgKkFAFgKkFKFIKYhwUwKrBTAq0ySy6zLbFpp8Qgn4GxJ909b5OWlgrk/KHhvS0/SNHWjO94faHw+i7cHNRqpPZ6fM5sTBum7brX5HW0MofG0jiFnG30Jp6yCpaMri/e03t4gn4LofJ/ivTU7WE9aPqnw0Pwsvv2wwjzqne0euM2Hk4afrtWlJ8GtaW2zIqLiU7x80exhNWJYmPabggEHmE9Zh8UwIkYCDqCAbrP8AyfY8YyaObJzSQwHs1Z3j6dy0djr5hFSDpyaCElON0cTtjstEKZ5p4Wte3rWaAN62oy7LpfJvjDXwiBx68eVubfsn8PBdzLGHAg6FZTtNhcuG1Iq4B6MuzHBpJzafun5HwW1N8WDpy33XmZTWSWdbczuNq8WZTQPcTnazR7ROgXGbA4GKjppp2BzXnIEAg2JLnZ9p+S890k+MVDGZiJmv3QdT7x0C1PDKFsEbI2CwaAAOVkp/k08v7nv2Q4/mzzcl7lFHg8EP9XE1vcAPovqlcGgnkryuR252gFPEY2O9I/Jo5c3HuXHGEqkrLdnTKShG72OWkd57iotm2N3yYf5jZaZ6rO4Lj/J5gpjYaiQdeTMX1DeHidV7m1eIinp5H8bdUc3HID4rbEvPUVOOy0/3qZ0PDBzlz1/3ocNH/SsWuMwx3yaLfxFaa0WAC4Pyb4cT0lS/VxsCeIGp8Tf4LviFGNazqC/arff3Hhk8uZ83cUpSE6grhaOoQhQmIUEKShUKVCQwQhCAKQU4KpBTgpiLAU4VYKkFIZYCpBShSCmIcFV1UQexzSNQmBTAq0yWjMMNkdhte6N2UTzYct0nqnwNwtSieHtB4ELjtvcF6aLpWN68efvN4t/XJPsDjvTRdE93pI7A/eHB365L0av5tNVVutH9GcVP8ubp8nqvt8z5ds9l3F3nVMLSDNwGRdbQj7wTbK7bDKGqO68ZbxyDj2+yexdyQDkVzO0Ox0NVd7Ruye2OPeOKdOvGUclT0fNf0E6TTzQ9V1Orp6ljwC1wKWto45mFkjQWkWIOdwsr/wBmYpQH0Ti9g0AzFvdOY8Cvoj25rYspaY3HY9v1BWiw7esGn6kOsv3Jo0LC8GgpW7sMYaL3y5819kkgbmSsydt9VvyZS5/vO+jVQ52L12VnMaf3B+LkPDTbvNpebBV47RTZ1G0+2MVOHMjO9LwaOHa48FzWzmAzV83nVVfcvdrTlv8ALLg0cuP19rANgmRkSVB3362Pqg93E967WKEMFmiwSlUhSWWlvzf2HGEptOe3QrZGGNsNAsz20rnVlVHSRG4Ds/eP5C58V2W2ONClgcb9c5MHNx0/XYuZ8nuDF5dVy5l99wniCbl3ifp2qaEeHF1pctvMdZ52qa9fI7PBqFsEMcbRk0AL7SmsoIXC9XdnUtNCshQrEhCgoUpSE6gqGihCFCYhQQpKFQmQgZ8IKcFVApgUyS4FOCqQU4KQywFOqwVIKQywFMCkUgpiJkYHAg8VmWN0r8Nq2zxj0bjpwzzczx1HctOBXnY9hbKqJ8bhqMjxB4ELrw1fhy12ejOevSzx03Wx9OEYg2oiZIw3BF16AKyzZjEn0FQ6lmyYXZHgCdCOw/VadFIHAEaFVXpcKXZ6ryJpVM6vz5l1gdQkNJGdWBMCnBUqRTQjKOMfYCvbGBoAoBTArRSuRYCqKucRtc5xyAX0uPFZrt/jzpHCigzc4gPtrnozvP071pTpOpLKROooRueTUPfi9cGtv0LDr9y+Z73cOxalRUrYmNY0WAFrcl42xuACkhFx6R2b3cz+QXRJ4iopNRjstgowaV3uxSEhCtISkLlaNyshQUxUEKCkyshQrCkIUlClKQnUEKGhiWQnQkVc8oFMCqgU4KZBYCnBVQKYFIovBTAqkFWApDHBTqsFSCkMsBUhKpBTEcrtrs/07OljHpGDL7w4tXz7DbRF483mPpG5AnVwGXxHFdkRcWKz7bHA3QSeeU9wQbvtwPt/n/qvRw9RVY8Gf/l9H09TjrQcJcSPqu3U0kFMCuZ2S2gbVRgE2kbk9vI/kukBXPKMoScXujWLUkmi4FMCqQV52PYwylic950GQ4k8AO1XC7aSFJ2V2eftrtIKWItYQZX5MH4nsC8TYDZ1z3GsqAS51yy+tjq89p+nevJwDDpMUqTUzj0TTkOBtowdg48ytXp4wxoaBkF3TapR4a3e/wBjkguJLO9uX3LLWSkKxIVyWOgRBCYhKoaKTFISFWkJSFLRRWQoKYqCFBSZWQoVhSEKShUKbKUgPEBUgpEwKQiwFMCqwUwKQywFOCqgUwKRReCmBVIKsBSGOCnVYKkFIZYCkniD2lrhkUykFUmIzLGKCXDKgTw/1ROnAX+wezlyXf4BjDKqJr2nvHEHiCrcRomTxuY9oIItZZy4TYTU3FzC4/3h/MPn9PTjJYqFn8a90cMk6Er/ALX7Gm19ayFjnvcAALkngszlfNjFUGi4hYf7refvH5KcXxSbE5WQQ33OPI/ePYOXNd9s7gzKSJrGjPVzuLjxJVRSw0cz+N7dkKX58rL4V7noYVQMp42xsaAALWX3gqkFWArkUru5vYsBTqoFMCtEyGgIUEKxIUAIghMQlUNFJlZCgq0hVkKWihSoKYqCoKTFQiyFNhngIQhSAwKYFVpgUAWApgVWCmBSGWApwVUCmBSKLwUwKpBVgKQxwU6qBTApDLAV8OLYVHVMLJBkePEdo7V9qYFVGTi7olpNWZ5GAbPRUYIZck6vda577L2wUgKkFaOpKbvLchQUVZFwKkFVApwVSYmi0FOCqQU4K0TILQU6qBTArRMhoCoIViQhACIIUkKFDRSZWQoKtIVZClooWyEyEhnOIQhYlHibR406kEe7GHF5IzNrW8F57tpqhg3paJwZxdc5fJVbfH9n94/QIr9p4ZIXRRsc5zm7oFuJFl6VKinTg1TzXvd66a+aS/o451GpyTna1rbdDpsNxBk8bZWHqn5HiCvpbO0mwcLrOy6eGGGlaS18zt5wvYtDiGtb2cyvY/3Q3Gb8c7xMBcO0F/DO3is6mGpxes7JvTS+m12+SuXCtOW0dVvyOvEreYTGoYNXBZhROd0GIXJudze7983XqYHs2KqBsksr+IjaDkwAkcfiipg4003Oeidtr8k+v+3COJlOyjHlffvboaAx4OhQ6oa3VwCzzDMTloX1cDnFzY2ksvwcLWtyB3hkrcE2fdXtNRUzPO8TugdhtfPQX4BTLBxhdzl4dLO291fbyKWIcrKMdddL7W7nt7RY5NDVUkUThuSOaH5XuC9oyPDIldT0oABcQFl2I0D6arpY3yF7A9hiJ1Dd8Xb8l91PFJitRKHyubBFkGDjmQOy5sTdXUwsHCLTSSTbdt9dNN78iY15KUtNW9Fftrr7mjRTNd6rge5MZW6XF1nGL4XJhTo56eZxYXWcwnI8bG2RGXgvllY6sxCzJHNErWkuBzDDG0kfgs44KMvFGfhs3e3TdNf9LeJcfC463S3687/8NQjqGE2DgTyurS8DMlZptDs6cPaypp5nghwDrnnoctc+BTYnic+IS0tLG8sa9jXSW4lzd435gDhxJTjhFK0oS8Ot21a1t7rUHiHFtSjrpZX3v3NIZUsOjwfFWCduu8Fn+JbHGlhfNTTv32NJc0kWkbbMZDkuZe4/7OAuf2n/ANRV08LCpZwnpdLbr6kTxEofFHlff+jaw5efjOLNp4JZRZxY0kMvbetwRhzv6PH7g+iyiDD2zNxKVznXgu5oByJLn6/BTh6MZtuT0VvW7sVWqOKSS3v/AAaDHjk1Zh75YLRzuDgxpINiHEZEi17DK4Xp7ImpFM3zx15bm5uCd2+QJble3JZtSbPxvw6SsL377Q8hoI3eqSBw7FMGKTeaUVFC8tdM9284Eg2MrgBfUC979y7JUItOMH+7ptvzvqjmVVppyXLrv7GwMq4ybB4vyurXOFr3yWdVHk73Yt+nnf5wBcOJsHO7wLt7x815+NV1e7zTDJJAJnf1r2k9dpJDbnLgCTzss40Yz+CXzVvUt1JR+KP+6GoNqWG4Dwbdq+bEpXdDMYXDpGtJabb2YF7W48vFcXUeT8wRdLTVMgqGC4NwA8jPdNhof1dL5JXEtq/eb9Ck6McrnGV7W5AqknJRatfuXzY5iLLARb5fAwtd0bh0c795x3vuhrSLcwOa7DDpHPhhe8We5jS4WtZxAJy4Zr6y1RZYTkmtFY1jFp7iWUqbIWJqcyhCFgWcht7/AMt7x/BRtThpYIqqIWcy2/blwd4fQrrJYWutvNBtpcXsmcwEWIuOS64YrIoJL4b37p8jCVDM5a729LHDYvI6ZlNXRNvuZSNGe4Wm+fZe/wAV6LtsIjHZjHGUiwZbV3eumZA1os1oA5AKplDE07zY2g8wBdN16UoqMoXttrbTo9NfMSpTTupb76c+q6Gd0RPQYhfXqb3Yd83+a7bZH9kh7j/EV6IpY8xuNz1yGferY2Bos0ADkEsRilVi1a13f2sOlQ4bvflb3ucHUUhnr62IauYbd9oyPnZfXs9tG2kYaeoY5pYTbLmb2IXYNhYHFwaN46utmUS0cTyC+NpI0JANlTxcZRyTjpZc9U0rX9RKhKLzReuvLk3cz/EsTNXV0sm4WsL2Njv9vri7vmPgvtw+rOF1MzZmO6KQ3a8Dhckd+tj3Lt/NY+qdxvV0yGXcrZYGPFnsBHIi6HjINZMnhta1+907gsPK+bN4r3vb23OFx/GDiRjpqVjiN4FziLW7+Qzvcp8Ig6LFRGPsRgeAjaF3FNSxx5MY1vcAFY2Bm9v7g3vasL/FS8XFRcIxsrNb63dtf69yvw8nJSlLW6fy9TwPKGf6Gffb/EFyrmSUbqGuawujMTN+3A7tiDyuLW7QtMkia8Wc0Ecjmm6Fu7u7o3dN22VuSiji+HBQcbrW/dNJfQqph88nK9treaONxfbOOeF8VOx7pZGkWt6gtm49wXPUdA+bDZDG0kxz7xAzJbuAG3xv4LT4cPhZfciYL62AF1dDAxgs1gA5AALSGLhTjanG2qervt1Ilh5Td5y5NaLqcXQbdQtpmMcxxmDQ3cAvvOtbIrxdnInywYuA27ywXaNd70hIt3rS24fCHb4iZve1YX+KuhpmMvusaL62AF+9UsVTipKEbXs977O4uBNtOUr2vy7fyZfR7QQsw2WjdfpSHgZZdYkjPxVEVHKymoa6NhcIXu3wOAbK4g92oPetVdh8LjcwsJOpICvigY1u61oDfZAsFr+Nivhju7u7v58iPw0uctlZad7nH1PlFh6H0LHGYizWEGwd2nj4LxcbbWNdSYpLCA8W6RgB6jQSW717kXBNzwWjRYZA12+2Fgd7QaAfivsLQRYjLklDEU4NZI+d3f0CVGUvil8l7nE1flCikh3IInuneLNjto48+fgqPJEOrV+836FdvBhsDCXMhYCdSGgE/BfRT07I77jGtvrYAX+CrjQyOMY2v3J4csylJ7FpSkK1IVzm4qFNkKR3OWQhC5TUEIQgAQhCABCEIAYFMCq0wKALAUwKrBTApDLQUwKqBTgpFFwKYFUgqwFIZYCmSAqQUhlgKYFVpgUxDgpwVWCpBVpktFoKkFICpBWiZDRcCmBVIKsBWiZBaCpKrBTgrRMixNkKUJgckhCFxG4IQhAAhCEACEIQAKQhCAAJwpQhjGCYIQpGOE4QhIocJghCQEhOhCYyQmCEJiJCsCELRbkDBMEIVxIY4TBCFqiGMhCFRJ//2Q==" alt="Imagen 1">
                        <div class="card-body">
                            <h5 class="card-title">No juegen esto...</h5>
                            <p class="card-text">Mi suceso con randonautica</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT5rfXBNlWrbMAQRFu36vG8brrljn6MlGlqAbLY8e2lJNqFGEZvQqQlvDJLJAQznTaVj8&usqp=CAU" alt="Imagen 2">
                        <div class="card-body">
                            <h5 class="card-title">Accidente fatal</h5>
                            <p class="card-text">Acaso eso fue un accidente de transito!!??</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <h3>Categorías</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Sucesos perturbadores</a></li>
                        <li class="list-group-item"><a href="#">Historias realistas</a></li>
                        <li class="list-group-item"><a href="#">Fantasmas</a></li>
                    </ul>

                    <h3>Etiquetas</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">#terror</a></li>
                        <li class="list-group-item"><a href="#">#Fear</a></li>
                        <li class="list-group-item"><a href="#">#Randonautica</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-8">
                <h2>Información del autor</h2>
                <p>Hola, Me llamo Louis Guzman, me dedico a subir a este blog todas las cosas paranormales que me han sucedidon</p>
            </div>
            <div class="col-lg-4">
                <h2>Comentarios</h2>
                <div class="comments">
                    <ul class="list-group">
                        <li class="list-group-item">Esta cañon O_O</li>
                        <li class="list-group-item">Que experiencias mas feas</li>
                        <li class="list-group-item">Tuviste mucha suerte de salir ileso</li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="mt-5">
            <p class="text-center">&copy; 2023 Mi Blog Personal. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/js/bootstrap.min.js"></script>
</body>

</html>