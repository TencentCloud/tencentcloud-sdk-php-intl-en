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
 * Approval procedure
 *
 * @method array getApproverUinSet() Obtain List of approvers
 * @method void setApproverUinSet(array $ApproverUinSet) Set List of approvers
 * @method string getApproverUin() Obtain Approver
 * @method void setApproverUin(string $ApproverUin) Set Approver
 * @method integer getStatus() Obtain Approval status. 0: Pending approval; 1: Approved; 2: Rejected
 * @method void setStatus(integer $Status) Set Approval status. 0: Pending approval; 1: Approved; 2: Rejected
 * @method string getComment() Obtain Approval comments
 * @method void setComment(string $Comment) Set Approval comments
 * @method string getApproveTime() Obtain Approval time.
 * @method void setApproveTime(string $ApproveTime) Set Approval time.
 */
class DspmApproverStep extends AbstractModel
{
    /**
     * @var array List of approvers
     */
    public $ApproverUinSet;

    /**
     * @var string Approver
     */
    public $ApproverUin;

    /**
     * @var integer Approval status. 0: Pending approval; 1: Approved; 2: Rejected
     */
    public $Status;

    /**
     * @var string Approval comments
     */
    public $Comment;

    /**
     * @var string Approval time.
     */
    public $ApproveTime;

    /**
     * @param array $ApproverUinSet List of approvers
     * @param string $ApproverUin Approver
     * @param integer $Status Approval status. 0: Pending approval; 1: Approved; 2: Rejected
     * @param string $Comment Approval comments
     * @param string $ApproveTime Approval time.
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
        if (array_key_exists("ApproverUinSet",$param) and $param["ApproverUinSet"] !== null) {
            $this->ApproverUinSet = [];
            foreach ($param["ApproverUinSet"] as $key => $value){
                $obj = new DspmUinUser();
                $obj->deserialize($value);
                array_push($this->ApproverUinSet, $obj);
            }
        }

        if (array_key_exists("ApproverUin",$param) and $param["ApproverUin"] !== null) {
            $this->ApproverUin = $param["ApproverUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }
    }
}
