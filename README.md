
## Prerequisites for Setting up the Project Qbitsdev02

You must have install 
- **PHP 8.0.0 version**

## Clone the Project
**$ git clone https://github.com/ReofDev/skeletor_base.git**

## Install and Configure the dba-back-end Project

- ### Install the package manager for PHP
    *->$ composer install*

- ### Add the file **.env** to the project

- ### To run or tart our migrations we use the command
    *->$ php artisan migrate --seed*
    
- ### We execute the command that will create the necessary encryption keys to generate secure access tokens.
    *->$ php artisan passport:install*
    
    **Note:** we must take the **access_client_id = 2** and copy its **access_client _secret** in the variable **ACCESS CLIENT SECRET** in the file **.env**
    
- ### To run the project

    *->$ php artisan optimize*
    
    *->$ php artisan serve*
    
    
- ### Laravel development server

    **http://127.0.0.1:8000/api/documentation**
    
    
    ###### method documentatio 
    ```
     @OA\Get(
          path="/path",
          operationId="get(path)",
          tags={"Model"},
          @OA\Parameter(
            name="paginate",
            in="query",
            description="paginate",
            required=false,
            @OA\Schema(
                title="Paginate",
                example="true",
                type="boolean",
                description="The Paginate data"
            )
          ),
        
          @OA\Parameter(
            name="dataFilter",
           in="query",
            description="turno resource name",
            required=false,
            @OA\Schema(
                type="string",
                description="The unique identifier of a turno resource"
            )
          ),
          @OA\Response(
              response=200,
              description=Register all."
          ),
          @OA\Response(
              response="default
              description="error."
          )
       )

       @OA\Get(
           path="/path/{id}",
           operationId="getpathById",
           tags={"Model"},
           summary="Get data information",
           description="Returns data",
        @OA\Parameter(
               name="id",
               description="SuperHero id",
               required=true,
               in="path",
                  @OA\Schema(type="integer")
           ),
           @OA\Response(
               response=200,
               description="Successful operation",
               @OA\JsonContent(ref="#/components/schemas/Model")
            ),
           @OA\Response(
               response=400,
               description="Bad Request"
           ),
           @OA\Response(
               response=401,
               description="Unauthenticated",
           ),
           @OA\Response(
               response=403,
               description="Forbidden"
           )
        )

        @OA\Post(
        path="/path",
        summary="Creates a new super hero resource",
        description="Creates a new super hero resource",
        tags={"Model"},
        security={{"passport": {"*"}}},
        @OA\RequestBody(
            @OA\MediaType(
                mediaType="application/json",
               @OA\Schema(ref="#/components/schemas/SuperHero")
           )
        ),
        @OA\Response(
            @OA\MediaType(mediaType="application/json"),
           response=200,
            description="The Provider resource created",
        ),
        @OA\Response(
            @OA\MediaType(mediaType="application/json"),
            response=401,
            description="Unauthenticated."
        ),
        @OA\Response(
            @OA\MediaType(mediaType="application/json"),
            response="default",
            description="an ""unexpected"" error",
        )
     )

        @OA\Put(
           path="/path/{id}",
           operationId="update-path",
           tags={"Model"},
           summary="Update existing data",
           description="Returns updated  data",
       @OA\Parameter(
           name="id",
           description="Number id of the resource",
           required=true,
           in="path",
           @OA\Schema(
               type="integer"
           )
       ),
       @OA\RequestBody(
           required=true,
           @OA\JsonContent(ref="#/components/schemas/SuperHero")
        ),
        @OA\Response(
           response=200,
           description="Successful operation",
           @OA\JsonContent(ref="#/components/schemas/SuperHero")
        ),
        @OA\Response(
           response=400,
           description="Bad Request"
        ),
        @OA\Response(
           response=401,
           description="Unauthenticated",
        ),
        @OA\Response(
           response=403,
           description="Forbidden"
        ),
        @OA\Response(
           response=404,
           description="Resource Not Found"
        )
      )
    
       @OA\Delete(
       path="/path/{id}",
       operationId="delete-path",
       tags={"Model"},
       summary="Delete existing data",
       description="Deletes a record and returns no content",
       @OA\Parameter(
           name="id",
           description="Return Product id",
           required=true,
           in="path",
           @OA\Schema(
              type="integer"
           )
       ),
       @OA\Response(
           response=204,
           description="Successful operation",
           @OA\JsonContent()
       ),
       @OA\Response(
           response=401,
           description="Unauthenticated",
       ),
       @OA\Response(
           response=403,
           description="Forbidden"
       ),
       @OA\Response(
           response=404,
           description="Resource Not Found"
       )
      )

    ```
    
    ###### model documentation 
     ```
     /**
         *
         * @OA\Schema(
         *   schema="SuperHero",
         *   type="object",
         *   @OA\Property(
         *       property="first_name",
         *       type="string",
         *       required={"true"},
         *       example="name super hero",
         *       description="The name super hero"
         *   ),
         *   @OA\Property(
         *       property="last_name",
         *       type="string",
         *       required={"true"},
         *       example="Last_name super hero",
         *       description="last name of super hero"
         *   ),
         *   @OA\Property(
         *       property="nick_name",
         *       type="string",
         *       required={"true"},
         *      example="super app",
         *       description="The nick_name super hero"
         *   ),
         *   @OA\Property(
         *       property="sex",
         *       type="string",
         *       required={"true"},
         *       description="The sex super hero"
         *   ),
         * @OA\Property(
         *       property="publisher_id",
         *       type="string",
         *       required={"true"},
         *       description="The publisher_id"
         *   ),
         * )
         */
     ```
     
     ###### controller documentation 
       ```
             /**
                 * @OA\Info(
                 *     title="Super-Hero API Documentation",
                 *     version="0.1",
                 * ),
                 * @OA\PathItem(path="/api"),
                 * @OA\Server(
                 *      description="SuperHero env",
                 *      url="http://localhost:8000/api/v1/"
                 *  )
            */
      ```
    
