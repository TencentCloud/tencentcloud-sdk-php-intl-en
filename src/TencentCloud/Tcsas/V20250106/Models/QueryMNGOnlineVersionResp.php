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
 * Queries the released mini game version ID
 *
 * @method string getMNPId() Obtain <p>Mini game appid</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid</p>
 * @method string getMNPVersion() Obtain <p>Version number</p>
 * @method void setMNPVersion(string $MNPVersion) Set <p>Version number</p>
 * @method integer getMNPVersionId() Obtain <p>Version ID</p>
 * @method void setMNPVersionId(integer $MNPVersionId) Set <p>Version ID</p>
 * @method string getMNPVersionNote() Obtain <p>Version remarks</p>
 * @method void setMNPVersionNote(string $MNPVersionNote) Set <p>Version remarks</p>
 * @method string getUpdateTime() Obtain <p>Update time</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time</p>
 */
class QueryMNGOnlineVersionResp extends AbstractModel
{
    /**
     * @var string <p>Mini game appid</p>
     */
    public $MNPId;

    /**
     * @var string <p>Version number</p>
     */
    public $MNPVersion;

    /**
     * @var integer <p>Version ID</p>
     */
    public $MNPVersionId;

    /**
     * @var string <p>Version remarks</p>
     */
    public $MNPVersionNote;

    /**
     * @var string <p>Update time</p>
     */
    public $UpdateTime;

    /**
     * @param string $MNPId <p>Mini game appid</p>
     * @param string $MNPVersion <p>Version number</p>
     * @param integer $MNPVersionId <p>Version ID</p>
     * @param string $MNPVersionNote <p>Version remarks</p>
     * @param string $UpdateTime <p>Update time</p>
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
        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPVersion",$param) and $param["MNPVersion"] !== null) {
            $this->MNPVersion = $param["MNPVersion"];
        }

        if (array_key_exists("MNPVersionId",$param) and $param["MNPVersionId"] !== null) {
            $this->MNPVersionId = $param["MNPVersionId"];
        }

        if (array_key_exists("MNPVersionNote",$param) and $param["MNPVersionNote"] !== null) {
            $this->MNPVersionNote = $param["MNPVersionNote"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
