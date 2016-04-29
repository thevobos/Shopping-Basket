# Shop-Basket

include("basket.php");

		$var = new basket();

		/*
		 *
		 * İtems Add Basket
		 *
		 * */
		$var
			->basket_name("php")
			->basket_add(["title"=>"items title","desc" => "items desc","price" => 350,"tax" => 18])
			->basket_add(["title"=>"items title","desc" => "items desc","price" => 350,"tax" => 18])
			->basket_add(["title"=>"items title","desc" => "items desc","price" => 350,"tax" => 18]);
		$var
			->basket_name("html")
			->basket_add(["title"=>"items title","desc" => "items desc","price" => 350,"tax" => 18])
			->basket_add(["title"=>"items title","desc" => "items desc","price" => 350,"tax" => 18])
			->basket_add(["title"=>"items title","desc" => "items desc","price" => 350,"tax" => 18]);


		/* Remove And List */
		$Remove	=	$var->basket_remove_item("php",[1,2]);


		/* List */
		$List	=	$var->basket_list("php");
		//print_r($List);

		/* Items Plus Price */
		$Price	=	$var->basket_plus_many("php","price");
		//echo $Price;

		/* Items All Count */
		$Count	=	$var->basket_plus_items("php");
		//echo $Count;
