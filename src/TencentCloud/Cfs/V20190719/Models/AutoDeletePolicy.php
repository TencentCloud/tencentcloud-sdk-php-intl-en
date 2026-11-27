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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Automatic deletion policy configuration information.
 *
 * @method string getPolicyId() Obtain <p>Policy ID.</p>
 * @method void setPolicyId(string $PolicyId) Set <p>Policy ID.</p>
 * @method string getFileSystemId() Obtain <p>File system Id.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system Id.</p>
 * @method string getPolicyName() Obtain <p>Automatic cleanup policy name.</p>
 * @method void setPolicyName(string $PolicyName) Set <p>Automatic cleanup policy name.</p>
 * @method array getPaths() Obtain <p>Path to be cleaned up.</p>
 * @method void setPaths(array $Paths) Set <p>Path to be cleaned up.</p>
 * @method string getStatus() Obtain <p>Automatic cleanup policy status.</p><p>Enumeration values:</p><ul><li>enabling: Enabling</li><li>enabled: Enabled</li><li>disabling: Disabling</li><li>disabed: Disabled</li><li>deleting: Deleting</li><li>failed: Failed</li><li>creating: Creating</li><li>updating: Updating</li></ul>
 * @method void setStatus(string $Status) Set <p>Automatic cleanup policy status.</p><p>Enumeration values:</p><ul><li>enabling: Enabling</li><li>enabled: Enabled</li><li>disabling: Disabling</li><li>disabed: Disabled</li><li>deleting: Deleting</li><li>failed: Failed</li><li>creating: Creating</li><li>updating: Updating</li></ul>
 * @method string getCreateTime() Obtain <p>Cleanup policy creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Cleanup policy creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getUpdateTime() Obtain <p>Policy update time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Policy update time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getRegion() Obtain <p>Region to which the policy belongs.</p>
 * @method void setRegion(string $Region) Set <p>Region to which the policy belongs.</p>
 * @method string getErrMsg() Obtain <p>Error information.</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Error information.</p>
 */
class AutoDeletePolicy extends AbstractModel
{
    /**
     * @var string <p>Policy ID.</p>
     */
    public $PolicyId;

    /**
     * @var string <p>File system Id.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Automatic cleanup policy name.</p>
     */
    public $PolicyName;

    /**
     * @var array <p>Path to be cleaned up.</p>
     */
    public $Paths;

    /**
     * @var string <p>Automatic cleanup policy status.</p><p>Enumeration values:</p><ul><li>enabling: Enabling</li><li>enabled: Enabled</li><li>disabling: Disabling</li><li>disabed: Disabled</li><li>deleting: Deleting</li><li>failed: Failed</li><li>creating: Creating</li><li>updating: Updating</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Cleanup policy creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Policy update time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Region to which the policy belongs.</p>
     */
    public $Region;

    /**
     * @var string <p>Error information.</p>
     */
    public $ErrMsg;

    /**
     * @param string $PolicyId <p>Policy ID.</p>
     * @param string $FileSystemId <p>File system Id.</p>
     * @param string $PolicyName <p>Automatic cleanup policy name.</p>
     * @param array $Paths <p>Path to be cleaned up.</p>
     * @param string $Status <p>Automatic cleanup policy status.</p><p>Enumeration values:</p><ul><li>enabling: Enabling</li><li>enabled: Enabled</li><li>disabling: Disabling</li><li>disabed: Disabled</li><li>deleting: Deleting</li><li>failed: Failed</li><li>creating: Creating</li><li>updating: Updating</li></ul>
     * @param string $CreateTime <p>Cleanup policy creation time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $UpdateTime <p>Policy update time.</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $Region <p>Region to which the policy belongs.</p>
     * @param string $ErrMsg <p>Error information.</p>
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
