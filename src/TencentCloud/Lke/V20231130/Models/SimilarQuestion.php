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
 * Similar question information.
 *
 * @method string getSimBizId() Obtain Similar question ID.
 * @method void setSimBizId(string $SimBizId) Set Similar question ID.
 * @method string getQuestion() Obtain Similar question content.
 * @method void setQuestion(string $Question) Set Similar question content.
 * @method integer getAuditStatus() Obtain Similar question review status, 1: audit failure.
 * @method void setAuditStatus(integer $AuditStatus) Set Similar question review status, 1: audit failure.
 */
class SimilarQuestion extends AbstractModel
{
    /**
     * @var string Similar question ID.
     */
    public $SimBizId;

    /**
     * @var string Similar question content.
     */
    public $Question;

    /**
     * @var integer Similar question review status, 1: audit failure.
     */
    public $AuditStatus;

    /**
     * @param string $SimBizId Similar question ID.
     * @param string $Question Similar question content.
     * @param integer $AuditStatus Similar question review status, 1: audit failure.
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
        if (array_key_exists("SimBizId",$param) and $param["SimBizId"] !== null) {
            $this->SimBizId = $param["SimBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }
    }
}
