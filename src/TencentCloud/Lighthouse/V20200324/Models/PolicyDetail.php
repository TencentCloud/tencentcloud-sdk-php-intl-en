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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Discount details.
 *
 * @method integer getUserDiscount() Obtain User discount.
 * @method void setUserDiscount(integer $UserDiscount) Set User discount.
 * @method integer getCommonDiscount() Obtain Public discount.
 * @method void setCommonDiscount(integer $CommonDiscount) Set Public discount.
 * @method integer getFinalDiscount() Obtain Final discount.
 * @method void setFinalDiscount(integer $FinalDiscount) Set Final discount.
 */
class PolicyDetail extends AbstractModel
{
    /**
     * @var integer User discount.
     */
    public $UserDiscount;

    /**
     * @var integer Public discount.
     */
    public $CommonDiscount;

    /**
     * @var integer Final discount.
     */
    public $FinalDiscount;

    /**
     * @param integer $UserDiscount User discount.
     * @param integer $CommonDiscount Public discount.
     * @param integer $FinalDiscount Final discount.
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
        if (array_key_exists("UserDiscount",$param) and $param["UserDiscount"] !== null) {
            $this->UserDiscount = $param["UserDiscount"];
        }

        if (array_key_exists("CommonDiscount",$param) and $param["CommonDiscount"] !== null) {
            $this->CommonDiscount = $param["CommonDiscount"];
        }

        if (array_key_exists("FinalDiscount",$param) and $param["FinalDiscount"] !== null) {
            $this->FinalDiscount = $param["FinalDiscount"];
        }
    }
}
