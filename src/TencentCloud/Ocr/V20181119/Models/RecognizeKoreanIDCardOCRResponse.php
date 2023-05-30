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
 * RecognizeKoreanIDCardOCR response structure.
 *
 * @method string getID() Obtain The ID card number.
 * @method void setID(string $ID) Set The ID card number.
 * @method string getAddress() Obtain The address.
 * @method void setAddress(string $Address) Set The address.
 * @method string getName() Obtain The name.
 * @method void setName(string $Name) Set The name.
 * @method string getDateOfIssue() Obtain The issue date.
 * @method void setDateOfIssue(string $DateOfIssue) Set The issue date.
 * @method string getPhoto() Obtain The Base64-encoded identity photo.
 * @method void setPhoto(string $Photo) Set The Base64-encoded identity photo.
 * @method string getSex() Obtain The gender.
 * @method void setSex(string $Sex) Set The gender.
 * @method string getBirthday() Obtain The birth date in the format of dd/mm/yyyy.
 * @method void setBirthday(string $Birthday) Set The birth date in the format of dd/mm/yyyy.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizeKoreanIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string The ID card number.
     */
    public $ID;

    /**
     * @var string The address.
     */
    public $Address;

    /**
     * @var string The name.
     */
    public $Name;

    /**
     * @var string The issue date.
     */
    public $DateOfIssue;

    /**
     * @var string The Base64-encoded identity photo.
     */
    public $Photo;

    /**
     * @var string The gender.
     */
    public $Sex;

    /**
     * @var string The birth date in the format of dd/mm/yyyy.
     */
    public $Birthday;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ID The ID card number.
     * @param string $Address The address.
     * @param string $Name The name.
     * @param string $DateOfIssue The issue date.
     * @param string $Photo The Base64-encoded identity photo.
     * @param string $Sex The gender.
     * @param string $Birthday The birth date in the format of dd/mm/yyyy.
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

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DateOfIssue",$param) and $param["DateOfIssue"] !== null) {
            $this->DateOfIssue = $param["DateOfIssue"];
        }

        if (array_key_exists("Photo",$param) and $param["Photo"] !== null) {
            $this->Photo = $param["Photo"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
