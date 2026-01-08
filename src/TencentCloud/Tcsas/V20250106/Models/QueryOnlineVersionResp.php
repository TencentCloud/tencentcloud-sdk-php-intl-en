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
 * Mini program online version ID
 *
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPVersion() Obtain Version number
 * @method void setMNPVersion(string $MNPVersion) Set Version number
 * @method integer getMNPVersionId() Obtain Version ID.
 * @method void setMNPVersionId(integer $MNPVersionId) Set Version ID.
 * @method string getMNPVersionNote() Obtain Version remarks.
 * @method void setMNPVersionNote(string $MNPVersionNote) Set Version remarks.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class QueryOnlineVersionResp extends AbstractModel
{
    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Version number
     */
    public $MNPVersion;

    /**
     * @var integer Version ID.
     */
    public $MNPVersionId;

    /**
     * @var string Version remarks.
     */
    public $MNPVersionNote;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @param string $MNPId Mini program ID
     * @param string $MNPVersion Version number
     * @param integer $MNPVersionId Version ID.
     * @param string $MNPVersionNote Version remarks.
     * @param string $UpdateTime Update time
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
