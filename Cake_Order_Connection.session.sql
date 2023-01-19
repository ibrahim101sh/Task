INSERT INTO client (
    ClientID,
    ClientName,
    ClientMobile,
    DeliveryDate,
    DeliveryHour,
    ItemNumbers,
    TotalSurvings,
    Flavor,
    OtherFlavor,
    Decor,
    Price,
    Situation
  )
VALUES (
    ClientID:int,
    'ClientName:varchar',
    'ClientMobile:varchar',
    'DeliveryDate:date',
    'DeliveryHour:time',
    ItemNumbers:int,
    TotalSurvings:int,
    'Flavor:varchar',
    'OtherFlavor:varchar',
    'Decor:varchar',
    'Price:double',
    'Situation:varchar'
  );