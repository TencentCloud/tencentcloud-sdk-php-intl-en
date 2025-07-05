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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessMNPApproval request structure.
 *
 * @method string getApprovalNo() Obtain Approval ID
 * @method void setApprovalNo(string $ApprovalNo) Set Approval ID
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method array getApprovalItems() Obtain Approval details
 * @method void setApprovalItems(array $ApprovalItems) Set Approval details
 */
class ProcessMNPApprovalRequest extends AbstractModel
{
    /**
     * @var string Approval ID
     */
    public $ApprovalNo;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var array Approval details
     */
    public $ApprovalItems;

    /**
     * @param string $ApprovalNo Approval ID
     * @param string $PlatformId Platform ID
     * @param array $ApprovalItems Approval details
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
        if (array_key_exists("ApprovalNo",$param) and $param["ApprovalNo"] !== null) {
            $this->ApprovalNo = $param["ApprovalNo"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ApprovalItems",$param) and $param["ApprovalItems"] !== null) {
            $this->ApprovalItems = [];
            foreach ($param["ApprovalItems"] as $key => $value){
                $obj = new ApprovalItem();
                $obj->deserialize($value);
                array_push($this->ApprovalItems, $obj);
            }
        }
    }
}
