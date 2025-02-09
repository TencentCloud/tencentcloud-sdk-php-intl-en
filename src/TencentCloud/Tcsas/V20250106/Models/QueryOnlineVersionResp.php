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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini program online version ID
 *
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPVersion() Obtain Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersion(string $MNPVersion) Set Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMNPVersionId() Obtain Version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersionId(integer $MNPVersionId) Set Version ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPVersionNote() Obtain Version note
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPVersionNote(string $MNPVersionNote) Set Version note
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QueryOnlineVersionResp extends AbstractModel
{
    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersion;

    /**
     * @var integer Version ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersionId;

    /**
     * @var string Version note
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPVersionNote;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPVersion Version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MNPVersionId Version ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPVersionNote Version note
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
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
