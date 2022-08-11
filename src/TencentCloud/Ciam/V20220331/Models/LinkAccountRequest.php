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
 * LinkAccount request structure.
 *
 * @method string getUserStoreId() Obtain User directory ID
 * @method void setUserStoreId(string $UserStoreId) Set User directory ID
 * @method string getPrimaryUserId() Obtain Primary user ID
 * @method void setPrimaryUserId(string $PrimaryUserId) Set Primary user ID
 * @method string getSecondaryUserId() Obtain Secondary user ID
 * @method void setSecondaryUserId(string $SecondaryUserId) Set Secondary user ID
 * @method string getUserLinkedOnAttribute() Obtain Fusion attribute

<li> **PHONENUMBER** </li>	  Mobile number
<li> **EMAIL** </li>  Email
 * @method void setUserLinkedOnAttribute(string $UserLinkedOnAttribute) Set Fusion attribute

<li> **PHONENUMBER** </li>	  Mobile number
<li> **EMAIL** </li>  Email
 */
class LinkAccountRequest extends AbstractModel
{
    /**
     * @var string User directory ID
     */
    public $UserStoreId;

    /**
     * @var string Primary user ID
     */
    public $PrimaryUserId;

    /**
     * @var string Secondary user ID
     */
    public $SecondaryUserId;

    /**
     * @var string Fusion attribute

<li> **PHONENUMBER** </li>	  Mobile number
<li> **EMAIL** </li>  Email
     */
    public $UserLinkedOnAttribute;

    /**
     * @param string $UserStoreId User directory ID
     * @param string $PrimaryUserId Primary user ID
     * @param string $SecondaryUserId Secondary user ID
     * @param string $UserLinkedOnAttribute Fusion attribute

<li> **PHONENUMBER** </li>	  Mobile number
<li> **EMAIL** </li>  Email
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

        if (array_key_exists("PrimaryUserId",$param) and $param["PrimaryUserId"] !== null) {
            $this->PrimaryUserId = $param["PrimaryUserId"];
        }

        if (array_key_exists("SecondaryUserId",$param) and $param["SecondaryUserId"] !== null) {
            $this->SecondaryUserId = $param["SecondaryUserId"];
        }

        if (array_key_exists("UserLinkedOnAttribute",$param) and $param["UserLinkedOnAttribute"] !== null) {
            $this->UserLinkedOnAttribute = $param["UserLinkedOnAttribute"];
        }
    }
}
