function regValidate()
			{
				let username = document.getElementById("username").value;
				let id = document.getElementById("id").value;
				
				let password = document.getElementById("password").value;
                let confirm = document.getElementById("confirm").value;
                let Pnumber = document.getElementById("Pnumber").value;
				
				let email = document.getElementById("email").value;
                let DOB = document.getElementById("DOB").value;


				if(username == "" || id == "" || password == "" || confirm == "" || Pnumber =="" || email == "" || DOB == "")
				{
                    alert("Input can't be blank"); 
					return false;
				}
				else
				{
					return true;
				}

			}
