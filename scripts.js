var arr=["http://www.readprint.com/author-28/Charles-Dickens-books","http://www.readprint.com/author-67/Edgar-Allan-Poe-books","http://www.readprint.com/author-4/Jane-Austen-books","http://www.readprint.com/author-83/Mark-Twain-books","http://www.readprint.com/author-69/William-Shakespeare-books"];
								 	var img=["http://www.readprint.com/images/authors/cache/charles-dickens_tiny.jpg","http://www.readprint.com/images/authors/cache/edgar-allan-poe_tiny.jpg","http://www.readprint.com/images/authors/cache/jane-austen_tiny.jpg","http://www.readprint.com/images/authors/cache/mark-twain_tiny.jpg","http://www.readprint.com/images/authors/cache/william-shakespeare_tiny.jpg"];
								 	var name=["http://www.readprint.com/author-28/Charles-Dickens-books","http://www.readprint.com/author-67/Edgar-Allan-Poe-books","http://www.readprint.com/author-4/Jane-Austen-books","http://www.readprint.com/author-83/Mark-Twain-books","http://www.readprint.com/author-69/William-Shakespeare-books"];
								 	var name1=["Charles Dickens","Edgar Allan Poe"];
								 	var der=["English novelist","American short story author, editor, & poet"];

									var ul=document.createElement('ul');
									    for(i=0;i<arr.length;i++)
									    {
									        var li=document.createElement('li');
									        li.innerHTML="<a class='sl_cover avatar_small c-normal' href=arr[i]><img calss='c-normal' src=img[i]></a><a class='sl_header' href=name[i]>Charles Dickens</a><br><div class='sl_desc'>English novelist</div><div class='clear'></div><br><br>";
									       ul.appendChild(li);
									    }
									    	document.getElementById('authnum').appendChild(ul);



									   var arr1=["http://www.readprint.com/work-114/Jane-Eyre-Charlotte-Bronte","http://www.readprint.com/work-71/Peter-Pan-James-M-Barrie","http://www.readprint.com/work-36/Pride-and-Prejudice-Jane-Austen","http://www.readprint.com/work-1467/The-Invisible-Man-HG-Wells","http://www.readprint.com/work-439/The-Origin-of-Species-Charles-Darwin"];
								 	var img1=["http://www.readprint.com/images/book_covers/cache/bc_114_tiny.jpg","http://www.readprint.com/images/book_covers/cache/bc_36_tiny.jpg","http://www.readprint.com/images/book_covers/cache/bc_36_tiny.jpg","http://www.readprint.com/images/book_covers/cache/bc_1467_tiny.jpg","http://www.readprint.com/images/book_covers/cache/bc_439_tiny.jpg"];
								 	var name1=["http://www.readprint.com/work-114/Jane-Eyre-Charlotte-Bronte","http://www.readprint.com/work-71/Peter-Pan-James-M-Barrie","http://www.readprint.com/work-36/Pride-and-Prejudice-Jane-Austen","http://www.readprint.com/work-1467/The-Invisible-Man-HG-Wells","http://www.readprint.com/work-439/The-Origin-of-Species-Charles-Darwin"];
								 	var name21=["Charles Dickens","Edgar Allan Poe"];
								 	var der1=["English novelist","American short story author, editor, & poet"];

									var ul=document.createElement('ul');
									    for(i=0;i<arr1.length;i++)
									    {
									        var li=document.createElement('li');
									        li.innerHTML="<a class='sl_cover avatar_small c-normal' href=arr1[i]><img calss='c-normal' src=img1[i]></a><a class='sl_header' href=name1[i]>Category: Fiction</a><br><div class='sl_desc'>by Charlotte Bronte</div><div class='clear'></div><br><br>";
									       ul.appendChild(li);
									    }
									    	document.getElementById('booknum').appendChild(ul);





									 function myFunction() {
								    var input, filter, ul, li, a, i;
								    input = document.getElementById("myInput");
								    filter = input.value.toUpperCase();

								    ul = document.getElementById("myUL");
								    li = ul.getElementsByTagName("li");
								    for (i = 0; i < li.length; i++) {
								        a = li[i].getElementsByTagName("a")[0];
								        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
								            li[i].style.display = "";
								        } else {
								            li[i].style.display = "none";

								        }
								    }
								}