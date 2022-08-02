
			function validate()
			{
				
				let id = document.getElementById("id").value;
				
				let password = document.getElementById("password").value;


				if(id == "" || password == "")
				{
                    alert("Input can't be blank"); 
					return false;
				}
				else
				{
					return true;
				}

			}

	