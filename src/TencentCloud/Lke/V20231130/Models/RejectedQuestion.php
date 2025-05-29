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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Release rejected questions.
 *
 * @method string getRejectedBizId() Obtain Reject question ID.
 * @method void setRejectedBizId(string $RejectedBizId) Set Reject question ID.
 * @method string getQuestion() Obtain The question that has been rejected.
 * @method void setQuestion(string $Question) Set The question that has been rejected.
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method string getStatusDesc() Obtain Status description.
 * @method void setStatusDesc(string $StatusDesc) Set Status description.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method boolean getIsAllowEdit() Obtain Whether editing is allowed.
 * @method void setIsAllowEdit(boolean $IsAllowEdit) Set Whether editing is allowed.
 * @method boolean getIsAllowDelete() Obtain Whether deletion is allowed.
 * @method void setIsAllowDelete(boolean $IsAllowDelete) Set Whether deletion is allowed.
 */
class RejectedQuestion extends AbstractModel
{
    /**
     * @var string Reject question ID.
     */
    public $RejectedBizId;

    /**
     * @var string The question that has been rejected.
     */
    public $Question;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var string Status description.
     */
    public $StatusDesc;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var boolean Whether editing is allowed.
     */
    public $IsAllowEdit;

    /**
     * @var boolean Whether deletion is allowed.
     */
    public $IsAllowDelete;

    /**
     * @param string $RejectedBizId Reject question ID.
     * @param string $Question The question that has been rejected.
     * @param integer $Status Status.
     * @param string $StatusDesc Status description.
     * @param string $UpdateTime Update time.
     * @param boolean $IsAllowEdit Whether editing is allowed.
     * @param boolean $IsAllowDelete Whether deletion is allowed.
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
        if (array_key_exists("RejectedBizId",$param) and $param["RejectedBizId"] !== null) {
            $this->RejectedBizId = $param["RejectedBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
        }

        if (array_key_exists("IsAllowDelete",$param) and $param["IsAllowDelete"] !== null) {
            $this->IsAllowDelete = $param["IsAllowDelete"];
        }
    }
}
