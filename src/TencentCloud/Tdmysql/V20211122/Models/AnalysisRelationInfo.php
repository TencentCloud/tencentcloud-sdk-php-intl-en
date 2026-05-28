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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Analytics engine association
 *
 * @method string getPrimaryInstanceId() Obtain <p>Source instance Id</p>
 * @method void setPrimaryInstanceId(string $PrimaryInstanceId) Set <p>Source instance Id</p>
 * @method string getAnalysisInstanceId() Obtain <p>Analysis engine instance Id</p>
 * @method void setAnalysisInstanceId(string $AnalysisInstanceId) Set <p>Analysis engine instance Id</p>
 * @method string getStatus() Obtain <p>Analysis engine relationship status</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>running: Running</li><li>destroyed: Terminated</li></ul>
 * @method void setStatus(string $Status) Set <p>Analysis engine relationship status</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>running: Running</li><li>destroyed: Terminated</li></ul>
 * @method string getCreateAt() Obtain <p>Creation time.</p>
 * @method void setCreateAt(string $CreateAt) Set <p>Creation time.</p>
 * @method string getUpdateAt() Obtain <p>Update time.</p>
 * @method void setUpdateAt(string $UpdateAt) Set <p>Update time.</p>
 */
class AnalysisRelationInfo extends AbstractModel
{
    /**
     * @var string <p>Source instance Id</p>
     */
    public $PrimaryInstanceId;

    /**
     * @var string <p>Analysis engine instance Id</p>
     */
    public $AnalysisInstanceId;

    /**
     * @var string <p>Analysis engine relationship status</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>running: Running</li><li>destroyed: Terminated</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateAt;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateAt;

    /**
     * @param string $PrimaryInstanceId <p>Source instance Id</p>
     * @param string $AnalysisInstanceId <p>Analysis engine instance Id</p>
     * @param string $Status <p>Analysis engine relationship status</p><p>Enumeration values:</p><ul><li>creating: Creating</li><li>running: Running</li><li>destroyed: Terminated</li></ul>
     * @param string $CreateAt <p>Creation time.</p>
     * @param string $UpdateAt <p>Update time.</p>
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
        if (array_key_exists("PrimaryInstanceId",$param) and $param["PrimaryInstanceId"] !== null) {
            $this->PrimaryInstanceId = $param["PrimaryInstanceId"];
        }

        if (array_key_exists("AnalysisInstanceId",$param) and $param["AnalysisInstanceId"] !== null) {
            $this->AnalysisInstanceId = $param["AnalysisInstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
