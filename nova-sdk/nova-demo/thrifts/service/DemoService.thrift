namespace nova com.youzan.demo.service

enum ErrorLevel {
    DEBUG = 1,
    INFO = 2,
    WARN = 3
    ERROR = 4
}

struct BaseStruct {
    1:optional bool propBool,
    2:optional byte propByte,
    3:optional i16 propI16,
    4:optional i32 propI32,
    5:optional i64 propI64,
    6:optional double propDouble,
    7:optional string propString,
    8:optional ErrorLevel errorLevel
}

struct MixedStruct {
    1:optional string propString,
    2:optional BaseStruct baseStruct,
    3:optional list<BaseStruct> propList,
    4:optional set<BaseStruct> propSet,
    5:optional map<string, BaseStruct> propMap
}

exception DemoServiceException {
    1: string message
    2: i32 code
}

service DemoService {
    void    throwException() throws (1:DemoServiceException e);

    void    returnVoid();

    bool    returnBool();
    i32     returnI32();
    double  returnDouble();
    string  returnString();
    ErrorLevel returnEnum();


    BaseStruct returnBaseStruct();
    MixedStruct returnMixedStruct();
    list<BaseStruct> returnList();
    set<BaseStruct> returnSet();
    map<string, BaseStruct> returnMap();

    void   paraBaseNoReturn(1:string paraString, 2:ErrorLevel errorLevel);

    void   paraMixedNoReturn (
        1:bool paraBool,
        2:i32 paraI32,
        3:double paraDouble,
        4:string paraString,
        5:BaseStruct baseStruct,
        6:list<BaseStruct> returnList,
        7:set<BaseStruct> returnSet,
        8:map<string, BaseStruct> returnMap,
        9:ErrorLevel errorLevel
    );

    map<string, BaseStruct> complexMethod(
        1:bool paraBool,
        2:i32 paraI32,
        3:double paraDouble,
        4:string paraString,
        5:BaseStruct baseStruct,
        6:list<BaseStruct> returnList,
        7:set<BaseStruct> returnSet,
        8:map<string, BaseStruct> returnMap,
        9:ErrorLevel errorLevel
    )
}