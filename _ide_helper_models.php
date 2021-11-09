<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Book
 *
 * @property int $book_id
 * @property int $book_cat_id
 * @property int|null $book_user_id
 * @property string $book_title
 * @property string $book_author
 * @property string $book_release
 * @property string $ISBN
 * @property string $book_price
 * @property string $book_description
 * @property string $book_photo
 * @property int $book_stock
 * @property int|null $book_stock_alert
 * @property int $book_publish
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookRelease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookStockAlert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereISBN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $cat_id
 * @property int|null $cat_parent_id
 * @property string $cat_name
 * @property-read Category|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCatName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCatParentId($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $dep_id
 * @property string $dep_name
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepName($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $ord_id
 * @property int $ord_user_id
 * @property string|null $shipping_address
 * @property string|null $billing_address
 * @property int $ord_pay_delayed
 * @property string|null $payment_date
 * @property string $ord_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereBillingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrdPayDelayed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrdStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrdUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order_details
 *
 * @property int $ode_id
 * @property int $ode_book_id
 * @property int $ode_ord_id
 * @property string $ode_unit_price
 * @property int $ode_quantity
 * @property string $ode_discount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereOdeBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereOdeDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereOdeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereOdeOrdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereOdeQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereOdeUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order_details whereUpdatedAt($value)
 */
	class Order_details extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $user_id
 * @property int|null $user_dep_id
 * @property int $user_status_id
 * @property int|null $user_commercial_id
 * @property string $user_firstname
 * @property string $user_lastname
 * @property string $user_address
 * @property string $user_zipcode
 * @property string $user_city
 * @property string|null $user_coef
 * @property string $user_phone
 * @property string|null $user_salary
 * @property string|null $user_role
 * @property int|null $disabled
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\UserStatus $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserCoef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserCommercialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserDepId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserZipcode($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserStatus
 *
 * @property int $status_id
 * @property int|null $general_status_id
 * @property string $status_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserStatus whereGeneralStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserStatus whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserStatus whereStatusName($value)
 */
	class UserStatus extends \Eloquent {}
}

