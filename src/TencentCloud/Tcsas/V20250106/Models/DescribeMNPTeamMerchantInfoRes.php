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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response parameters structure for querying bound merchant accounts of a mini program team.
 *
 * @method string getMerchantID() Obtain <p>Merchant ID.</p>
 * @method void setMerchantID(string $MerchantID) Set <p>Merchant ID.</p>
 * @method integer getApprovalStatus() Obtain <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
 * @method void setApprovalStatus(integer $ApprovalStatus) Set <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
 * @method string getID() Obtain <p>Merchant binding ID of the mini program team, used to unbind the merchant.</p>
 * @method void setID(string $ID) Set <p>Merchant binding ID of the mini program team, used to unbind the merchant.</p>
 * @method string getMerchantName() Obtain <p>Merchant name.</p>
 * @method void setMerchantName(string $MerchantName) Set <p>Merchant name.</p>
 */
class DescribeMNPTeamMerchantInfoRes extends AbstractModel
{
    /**
     * @var string <p>Merchant ID.</p>
     */
    public $MerchantID;

    /**
     * @var integer <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
     */
    public $ApprovalStatus;

    /**
     * @var string <p>Merchant binding ID of the mini program team, used to unbind the merchant.</p>
     */
    public $ID;

    /**
     * @var string <p>Merchant name.</p>
     */
    public $MerchantName;

    /**
     * @param string $MerchantID <p>Merchant ID.</p>
     * @param integer $ApprovalStatus <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
     * @param string $ID <p>Merchant binding ID of the mini program team, used to unbind the merchant.</p>
     * @param string $MerchantName <p>Merchant name.</p>
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
        if (array_key_exists("MerchantID",$param) and $param["MerchantID"] !== null) {
            $this->MerchantID = $param["MerchantID"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }
    }
}
