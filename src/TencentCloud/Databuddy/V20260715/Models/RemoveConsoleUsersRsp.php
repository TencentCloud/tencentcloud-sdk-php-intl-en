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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * to batch removal of console users
 *
 * @method boolean getStatus() Obtain <p>The request has been processed; true even if partially failed. For individual results, refer to SuccessUins/FailItems.</p>
 * @method void setStatus(boolean $Status) Set <p>The request has been processed; true even if partially failed. For individual results, refer to SuccessUins/FailItems.</p>
 * @method array getSuccessUins() Obtain <p>List of successfully deleted User UINs</p>
 * @method void setSuccessUins(array $SuccessUins) Set <p>List of successfully deleted User UINs</p>
 * @method array getFailItems() Obtain <p>List of failed items (Item is the user UIN, and FailReason is the failure reason).</p>
 * @method void setFailItems(array $FailItems) Set <p>List of failed items (Item is the user UIN, and FailReason is the failure reason).</p>
 */
class RemoveConsoleUsersRsp extends AbstractModel
{
    /**
     * @var boolean <p>The request has been processed; true even if partially failed. For individual results, refer to SuccessUins/FailItems.</p>
     */
    public $Status;

    /**
     * @var array <p>List of successfully deleted User UINs</p>
     */
    public $SuccessUins;

    /**
     * @var array <p>List of failed items (Item is the user UIN, and FailReason is the failure reason).</p>
     */
    public $FailItems;

    /**
     * @param boolean $Status <p>The request has been processed; true even if partially failed. For individual results, refer to SuccessUins/FailItems.</p>
     * @param array $SuccessUins <p>List of successfully deleted User UINs</p>
     * @param array $FailItems <p>List of failed items (Item is the user UIN, and FailReason is the failure reason).</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessUins",$param) and $param["SuccessUins"] !== null) {
            $this->SuccessUins = $param["SuccessUins"];
        }

        if (array_key_exists("FailItems",$param) and $param["FailItems"] !== null) {
            $this->FailItems = [];
            foreach ($param["FailItems"] as $key => $value){
                $obj = new CommonFailItem();
                $obj->deserialize($value);
                array_push($this->FailItems, $obj);
            }
        }
    }
}
