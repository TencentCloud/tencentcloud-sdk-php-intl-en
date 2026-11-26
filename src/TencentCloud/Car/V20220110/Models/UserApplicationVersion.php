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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application version information.
 *
 * @method string getApplicationVersionId() Obtain <p>Application version Id</p>
 * @method void setApplicationVersionId(string $ApplicationVersionId) Set <p>Application version Id</p>
 * @method integer getApplicationVersionSize() Obtain <p>Application version size</p>
 * @method void setApplicationVersionSize(integer $ApplicationVersionSize) Set <p>Application version size</p>
 * @method string getApplicationVersionStatus() Obtain <p>Application version status (Uploading: Creating, Creating: Creating, CreateFailed: Failed to create, Deleting: Deleting, Inuse: Current version, Normal: To be released, Usable: Available)</p>
 * @method void setApplicationVersionStatus(string $ApplicationVersionStatus) Set <p>Application version status (Uploading: Creating, Creating: Creating, CreateFailed: Failed to create, Deleting: Deleting, Inuse: Current version, Normal: To be released, Usable: Available)</p>
 * @method string getApplicationVersionName() Obtain <p>Application version name</p>
 * @method void setApplicationVersionName(string $ApplicationVersionName) Set <p>Application version name</p>
 * @method string getCreateTime() Obtain <p>Application version creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Application version creation time</p>
 * @method array getApplicationVersionRegions() Obtain <p>Application version distribution regions (<br>Standard regions:<br>ap-chinese-mainland: Chinese mainland,<br>na-north-america: North America,<br>eu-frankfurt: Frankfurt,<br>ap-mumbai: Mumbai,<br>ap-tokyo: Tokyo,<br>ap-seoul: Seoul,<br>ap-singapore: Singapore,<br>ap-bangkok: Bangkok,<br>ap-hongkong: Hong Kong (China),<br>Fusion regions:<br>me-middle-east-fusion: Middle East<br>na-north-america-fusion: North America<br>sa-south-america-fusion: South America<br>ap-tokyo-fusion: Tokyo<br>ap-seoul-fusion: Seoul<br>eu-frankfurt-fusion: Frankfurt<br>ap-singapore-fusion: Singapore<br>ap-hongkong-fusion: Hong Kong (China)<br>)</p>
 * @method void setApplicationVersionRegions(array $ApplicationVersionRegions) Set <p>Application version distribution regions (<br>Standard regions:<br>ap-chinese-mainland: Chinese mainland,<br>na-north-america: North America,<br>eu-frankfurt: Frankfurt,<br>ap-mumbai: Mumbai,<br>ap-tokyo: Tokyo,<br>ap-seoul: Seoul,<br>ap-singapore: Singapore,<br>ap-bangkok: Bangkok,<br>ap-hongkong: Hong Kong (China),<br>Fusion regions:<br>me-middle-east-fusion: Middle East<br>na-north-america-fusion: North America<br>sa-south-america-fusion: South America<br>ap-tokyo-fusion: Tokyo<br>ap-seoul-fusion: Seoul<br>eu-frankfurt-fusion: Frankfurt<br>ap-singapore-fusion: Singapore<br>ap-hongkong-fusion: Hong Kong (China)<br>)</p>
 * @method string getApplicationVersionUpdateMode() Obtain <p>Application version update mode: <br>FULL: Full update, <br>INCREMENT: Incremental update</p>
 * @method void setApplicationVersionUpdateMode(string $ApplicationVersionUpdateMode) Set <p>Application version update mode: <br>FULL: Full update, <br>INCREMENT: Incremental update</p>
 */
class UserApplicationVersion extends AbstractModel
{
    /**
     * @var string <p>Application version Id</p>
     */
    public $ApplicationVersionId;

    /**
     * @var integer <p>Application version size</p>
     */
    public $ApplicationVersionSize;

    /**
     * @var string <p>Application version status (Uploading: Creating, Creating: Creating, CreateFailed: Failed to create, Deleting: Deleting, Inuse: Current version, Normal: To be released, Usable: Available)</p>
     */
    public $ApplicationVersionStatus;

    /**
     * @var string <p>Application version name</p>
     */
    public $ApplicationVersionName;

    /**
     * @var string <p>Application version creation time</p>
     */
    public $CreateTime;

    /**
     * @var array <p>Application version distribution regions (<br>Standard regions:<br>ap-chinese-mainland: Chinese mainland,<br>na-north-america: North America,<br>eu-frankfurt: Frankfurt,<br>ap-mumbai: Mumbai,<br>ap-tokyo: Tokyo,<br>ap-seoul: Seoul,<br>ap-singapore: Singapore,<br>ap-bangkok: Bangkok,<br>ap-hongkong: Hong Kong (China),<br>Fusion regions:<br>me-middle-east-fusion: Middle East<br>na-north-america-fusion: North America<br>sa-south-america-fusion: South America<br>ap-tokyo-fusion: Tokyo<br>ap-seoul-fusion: Seoul<br>eu-frankfurt-fusion: Frankfurt<br>ap-singapore-fusion: Singapore<br>ap-hongkong-fusion: Hong Kong (China)<br>)</p>
     */
    public $ApplicationVersionRegions;

    /**
     * @var string <p>Application version update mode: <br>FULL: Full update, <br>INCREMENT: Incremental update</p>
     */
    public $ApplicationVersionUpdateMode;

    /**
     * @param string $ApplicationVersionId <p>Application version Id</p>
     * @param integer $ApplicationVersionSize <p>Application version size</p>
     * @param string $ApplicationVersionStatus <p>Application version status (Uploading: Creating, Creating: Creating, CreateFailed: Failed to create, Deleting: Deleting, Inuse: Current version, Normal: To be released, Usable: Available)</p>
     * @param string $ApplicationVersionName <p>Application version name</p>
     * @param string $CreateTime <p>Application version creation time</p>
     * @param array $ApplicationVersionRegions <p>Application version distribution regions (<br>Standard regions:<br>ap-chinese-mainland: Chinese mainland,<br>na-north-america: North America,<br>eu-frankfurt: Frankfurt,<br>ap-mumbai: Mumbai,<br>ap-tokyo: Tokyo,<br>ap-seoul: Seoul,<br>ap-singapore: Singapore,<br>ap-bangkok: Bangkok,<br>ap-hongkong: Hong Kong (China),<br>Fusion regions:<br>me-middle-east-fusion: Middle East<br>na-north-america-fusion: North America<br>sa-south-america-fusion: South America<br>ap-tokyo-fusion: Tokyo<br>ap-seoul-fusion: Seoul<br>eu-frankfurt-fusion: Frankfurt<br>ap-singapore-fusion: Singapore<br>ap-hongkong-fusion: Hong Kong (China)<br>)</p>
     * @param string $ApplicationVersionUpdateMode <p>Application version update mode: <br>FULL: Full update, <br>INCREMENT: Incremental update</p>
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
        if (array_key_exists("ApplicationVersionId",$param) and $param["ApplicationVersionId"] !== null) {
            $this->ApplicationVersionId = $param["ApplicationVersionId"];
        }

        if (array_key_exists("ApplicationVersionSize",$param) and $param["ApplicationVersionSize"] !== null) {
            $this->ApplicationVersionSize = $param["ApplicationVersionSize"];
        }

        if (array_key_exists("ApplicationVersionStatus",$param) and $param["ApplicationVersionStatus"] !== null) {
            $this->ApplicationVersionStatus = $param["ApplicationVersionStatus"];
        }

        if (array_key_exists("ApplicationVersionName",$param) and $param["ApplicationVersionName"] !== null) {
            $this->ApplicationVersionName = $param["ApplicationVersionName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ApplicationVersionRegions",$param) and $param["ApplicationVersionRegions"] !== null) {
            $this->ApplicationVersionRegions = $param["ApplicationVersionRegions"];
        }

        if (array_key_exists("ApplicationVersionUpdateMode",$param) and $param["ApplicationVersionUpdateMode"] !== null) {
            $this->ApplicationVersionUpdateMode = $param["ApplicationVersionUpdateMode"];
        }
    }
}
