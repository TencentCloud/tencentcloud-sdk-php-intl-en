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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output results of user groups.
 *
 * @method string getItem() Obtain User group name.
 * @method void setItem(string $Item) Set User group name.
 * @method boolean getResult() Obtain Whether the user group is created successfully.
 * @method void setResult(boolean $Result) Set Whether the user group is created successfully.
 * @method string getReason() Obtain Specify the reason for the failure in the case of creation failure.
 * @method void setReason(string $Reason) Set Specify the reason for the failure in the case of creation failure.
 */
class ResultItem extends AbstractModel
{
    /**
     * @var string User group name.
     */
    public $Item;

    /**
     * @var boolean Whether the user group is created successfully.
     */
    public $Result;

    /**
     * @var string Specify the reason for the failure in the case of creation failure.
     */
    public $Reason;

    /**
     * @param string $Item User group name.
     * @param boolean $Result Whether the user group is created successfully.
     * @param string $Reason Specify the reason for the failure in the case of creation failure.
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
