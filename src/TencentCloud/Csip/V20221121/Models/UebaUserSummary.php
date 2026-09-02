<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User behavior analysis - user overview information
 *
 * @method integer getAllUserCount() Obtain Quantity of all users
 * @method void setAllUserCount(integer $AllUserCount) Set Quantity of all users
 * @method integer getAbnormalUserCount() Obtain Number of abnormal users
 * @method void setAbnormalUserCount(integer $AbnormalUserCount) Set Number of abnormal users
 * @method integer getUserCount() Obtain Number of users for the cloud account
 * @method void setUserCount(integer $UserCount) Set Number of users for the cloud account
 * @method integer getSubUserCount() Obtain Number of sub-users
 * @method void setSubUserCount(integer $SubUserCount) Set Number of sub-users
 * @method integer getCustomUserCount() Obtain Number of custom users
 * @method void setCustomUserCount(integer $CustomUserCount) Set Number of custom users
 * @method array getElement() Obtain Custom user sum building block
 * @method void setElement(array $Element) Set Custom user sum building block
 */
class UebaUserSummary extends AbstractModel
{
    /**
     * @var integer Quantity of all users
     */
    public $AllUserCount;

    /**
     * @var integer Number of abnormal users
     */
    public $AbnormalUserCount;

    /**
     * @var integer Number of users for the cloud account
     */
    public $UserCount;

    /**
     * @var integer Number of sub-users
     */
    public $SubUserCount;

    /**
     * @var integer Number of custom users
     */
    public $CustomUserCount;

    /**
     * @var array Custom user sum building block
     */
    public $Element;

    /**
     * @param integer $AllUserCount Quantity of all users
     * @param integer $AbnormalUserCount Number of abnormal users
     * @param integer $UserCount Number of users for the cloud account
     * @param integer $SubUserCount Number of sub-users
     * @param integer $CustomUserCount Number of custom users
     * @param array $Element Custom user sum building block
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
        if (array_key_exists("AllUserCount",$param) and $param["AllUserCount"] !== null) {
            $this->AllUserCount = $param["AllUserCount"];
        }

        if (array_key_exists("AbnormalUserCount",$param) and $param["AbnormalUserCount"] !== null) {
            $this->AbnormalUserCount = $param["AbnormalUserCount"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("SubUserCount",$param) and $param["SubUserCount"] !== null) {
            $this->SubUserCount = $param["SubUserCount"];
        }

        if (array_key_exists("CustomUserCount",$param) and $param["CustomUserCount"] !== null) {
            $this->CustomUserCount = $param["CustomUserCount"];
        }

        if (array_key_exists("Element",$param) and $param["Element"] !== null) {
            $this->Element = [];
            foreach ($param["Element"] as $key => $value){
                $obj = new UebaUserSummaryElement();
                $obj->deserialize($value);
                array_push($this->Element, $obj);
            }
        }
    }
}
