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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUserByProperty request structure.
 *
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method string getPropertyCode() Obtain Query attribute

<li> **phoneNumber** </li>	  Mobile number
<li> **email** </li>  Email
 * @method void setPropertyCode(string $PropertyCode) Set Query attribute

<li> **phoneNumber** </li>	  Mobile number
<li> **email** </li>  Email
 * @method string getPropertyValue() Obtain Attribute value
 * @method void setPropertyValue(string $PropertyValue) Set Attribute value
 * @method boolean getOriginal() Obtain Whether the content is passed through
 * @method void setOriginal(boolean $Original) Set Whether the content is passed through
 */
class ListUserByPropertyRequest extends AbstractModel
{
    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var string Query attribute

<li> **phoneNumber** </li>	  Mobile number
<li> **email** </li>  Email
     */
    public $PropertyCode;

    /**
     * @var string Attribute value
     */
    public $PropertyValue;

    /**
     * @var boolean Whether the content is passed through
     */
    public $Original;

    /**
     * @param string $UserStoreId User directory ID
     * @param string $PropertyCode Query attribute

<li> **phoneNumber** </li>	  Mobile number
<li> **email** </li>  Email
     * @param string $PropertyValue Attribute value
     * @param boolean $Original Whether the content is passed through
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("PropertyCode",$param) and $param["PropertyCode"] !== null) {
            $this->PropertyCode = $param["PropertyCode"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
