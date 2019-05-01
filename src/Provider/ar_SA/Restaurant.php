<?php

namespace FakerRestaurant\Provider\ar_SA;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        "تشيز بيتزا" , "هامبرغر" , "تشيز برجر" , "بيكون برجر" , "بيكون تشيز برجر" ,
        "ليتل همبرغر" , "تشيز برجر الصغير" , "ليتل بيكون برجر" , "ليتل بيكون تشيز برجر" ,
        "ساندوتش الخضروات" , "الجبنة ساندوتش الخضروات" , "الجبنة المشوية" ,
        "هوت دوك" , "لحم البقر المقدد" , "لحم الخنزير المقدد" , "المعكرونة"
    ];

    protected static $beverageNames = [
        "باربكان" , "براعم لايت" , "بدويايزر" , "ميلر لايت" ,
        "ميلك شيك" , "شاي" , "شاي حلو" , "قهوة" , "شاي ساخن" ,"سحلب" , "بابونج"
        , "عصير اليمون" , "كوكا كولا" , "الدايت كوك" ,
        "ماء" , "سبرايت" , "عصير برتقال" , "قهوة مثلجة"
    ];

    protected static $dairyNames = [
        'زبدة',
        'بيضة',
        'حليب',
        'جبن',
        'الكريمة الحامضة',
        'جبن موزاريلا',
        'زبادي',
        'كريم',
        'حليب',
        "كاسترد",
    ];

    protected static $vegetableNames = [
        'بصلة' , 'ثوم', 'طماطم', 'البطاطس', 'جزرة', 'بيل بيل', 'بيل باسيل', 'بقدونس', 'بروكلي',
        'حبوب ذرة', 'سبانخ', 'فطر', 'زنجبيل', 'الفلفل الحار', 'كرفس', 'خيار', 'ورطة',
        'أفوكادو', 'يقطين', 'نعناع', 'الباذنجان', 'بطاطا',
    ];

    protected static $fruitNames = [
        'ليمون',
        'تفاحة',
        'موز',
        'جير',
        'الفراولة',
        'البرتقالي',
        'أناناس',
        "خوخ",
        'زبيب',
        'جوزة الهند',
        'عنب',
        'خوخ',
        'توت العليق',
        'كرز',
        'مانجو',
        'كمثرى',
        'بلاك بيري',
        'كرز',
        'البطيخ',
        'كيوي',
        'بابايا',
        "الجوافة",
        "ليتشي",
    ];

    protected static $meatNames = [
        'دجاج',
        'لحم خنزير مقدد',
        'سجق',
        'لحم بقري',
        'لحم جمل',
        'نقانق',
        'لحم جمل',
        'ديك رومي',
        'جناح دجاجة',
        'صدر دجاج',
        'عدس',
    ];

    protected static $sauceNames = [
        "صلصة الطماطم" , "معجون الطماطم" , "صلصة المايونيز" , "صلصة الباربكيو" , "صلصة الفلفل الحار" , "صلصة الثوم" ,
    ];

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function beverageName()
    {
        return static::randomElement(static::$beverageNames);
    }

    /**
     * A random Dairy Name.
     * @return string
     */
    public function dairyName()
    {
        return static::randomElement(static::$dairyNames);
    }

    /**
     * A random Vegetable Name.
     * @return string
     */
    public function vegetableName()
    {
        return static::randomElement(static::$vegetableNames);
    }

    /**
     * A random Fruit Name.
     * @return string
     */
    public function fruitName()
    {
        return static::randomElement(static::$fruitNames);
    }

    /**
     * A random Meat Name.
     * @return string
     */
    public function meatName()
    {
        return static::randomElement(static::$meatNames);
    }

    /**
     * A random Sauce Name.
     * @return string
     */
    public function sauceName()
    {
        return static::randomElement(static::$sauceNames);
    }
}
