<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MLIDCardOCR response structure.
 *
 * @method string getID() Obtain Identity card number
 * @method void setID(string $ID) Set Identity card number
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getAddress() Obtain Address
 * @method void setAddress(string $Address) Set Address
 * @method string getSex() Obtain Gender
 * @method void setSex(string $Sex) Set Gender
 * @method array getWarn() Obtain Alarm code
-9103	Alarm for photographed document
-9102	Alarm for photocopied document
-9106       Alarm for covered card
 * @method void setWarn(array $Warn) Set Alarm code
-9103	Alarm for photographed document
-9102	Alarm for photocopied document
-9106       Alarm for covered card
 * @method string getImage() Obtain Identity photo
 * @method void setImage(string $Image) Set Identity photo
 * @method string getAdvancedInfo() Obtain Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
 * @method void setAdvancedInfo(string $AdvancedInfo) Set Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
 * @method string getType() Obtain Certificate type
MyKad  ID card
MyPR    Permanent resident card
MyTentera   Military identity card
MyKAS    Temporary ID card
POLIS  Police card
IKAD   Work permit
MyKid   Kid card
 * @method void setType(string $Type) Set Certificate type
MyKad  ID card
MyPR    Permanent resident card
MyTentera   Military identity card
MyKAS    Temporary ID card
POLIS  Police card
IKAD   Work permit
MyKid   Kid card
 * @method string getBirthday() Obtain Date of birth (currently, this field is only supported for IKAD).
 * @method void setBirthday(string $Birthday) Set Date of birth (currently, this field is only supported for IKAD).
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class MLIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string Identity card number
     */
    public $ID;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Address
     */
    public $Address;

    /**
     * @var string Gender
     */
    public $Sex;

    /**
     * @var array Alarm code
-9103	Alarm for photographed document
-9102	Alarm for photocopied document
-9106       Alarm for covered card
     */
    public $Warn;

    /**
     * @var string Identity photo
     */
    public $Image;

    /**
     * @var string Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
     */
    public $AdvancedInfo;

    /**
     * @var string Certificate type
MyKad  ID card
MyPR    Permanent resident card
MyTentera   Military identity card
MyKAS    Temporary ID card
POLIS  Police card
IKAD   Work permit
MyKid   Kid card
     */
    public $Type;

    /**
     * @var string Date of birth (currently, this field is only supported for IKAD).
     */
    public $Birthday;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ID Identity card number
     * @param string $Name Name
     * @param string $Address Address
     * @param string $Sex Gender
     * @param array $Warn Alarm code
-9103	Alarm for photographed document
-9102	Alarm for photocopied document
-9106       Alarm for covered card
     * @param string $Image Identity photo
     * @param string $AdvancedInfo Extended field:
{
    ID:{
        Confidence:0.9999
    },
    Name:{
        Confidence:0.9996
    }
}
     * @param string $Type Certificate type
MyKad  ID card
MyPR    Permanent resident card
MyTentera   Military identity card
MyKAS    Temporary ID card
POLIS  Police card
IKAD   Work permit
MyKid   Kid card
     * @param string $Birthday Date of birth (currently, this field is only supported for IKAD).
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
