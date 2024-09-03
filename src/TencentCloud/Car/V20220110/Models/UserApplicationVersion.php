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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application version information.
 *
 * @method string getApplicationVersionId() Obtain Application version ID.
 * @method void setApplicationVersionId(string $ApplicationVersionId) Set Application version ID.
 * @method integer getApplicationVersionSize() Obtain Application version size.
 * @method void setApplicationVersionSize(integer $ApplicationVersionSize) Set Application version size.
 * @method string getApplicationVersionStatus() Obtain Application version status (Uploading: uploading; Creating: in creation; CreateFailed: creation failed; Deleting: deleting; Inuse: current version; Normal: to be released; Usable: available).
 * @method void setApplicationVersionStatus(string $ApplicationVersionStatus) Set Application version status (Uploading: uploading; Creating: in creation; CreateFailed: creation failed; Deleting: deleting; Inuse: current version; Normal: to be released; Usable: available).
 * @method string getApplicationVersionName() Obtain Application version name.
 * @method void setApplicationVersionName(string $ApplicationVersionName) Set Application version name.
 * @method string getCreateTime() Obtain Application version creation time.
 * @method void setCreateTime(string $CreateTime) Set Application version creation time.
 * @method array getApplicationVersionRegions() Obtain Region for application version distribution (
Standard zone:
ap-chinese-mainland: Chinese mainland
na-north-america: North America
eu-frankfurt: Frankfurt
ap-mumbai: Mumbai
ap-tokyo: Tokyo
ap-seoul: Seoul
ap-singapore: Singapore
ap-bangkok: Bangkok
ap-hongkong: Hong Kong (China)
Integration zone:
me-middle-east-fusion: Middle East
na-north-america-fusion: North America
sa-south-america-fusion: South America
ap-tokyo-fusion: Tokyo
ap-seoul-fusion: Seoul
eu-frankfurt-fusion: Frankfurt
ap-singapore-fusion: Singapore
ap-hongkong-fusion: Hong Kong (China)
).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationVersionRegions(array $ApplicationVersionRegions) Set Region for application version distribution (
Standard zone:
ap-chinese-mainland: Chinese mainland
na-north-america: North America
eu-frankfurt: Frankfurt
ap-mumbai: Mumbai
ap-tokyo: Tokyo
ap-seoul: Seoul
ap-singapore: Singapore
ap-bangkok: Bangkok
ap-hongkong: Hong Kong (China)
Integration zone:
me-middle-east-fusion: Middle East
na-north-america-fusion: North America
sa-south-america-fusion: South America
ap-tokyo-fusion: Tokyo
ap-seoul-fusion: Seoul
eu-frankfurt-fusion: Frankfurt
ap-singapore-fusion: Singapore
ap-hongkong-fusion: Hong Kong (China)
).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationVersionUpdateMode() Obtain Application version update method.
FULL: full update.
INCREMENT: incremental update.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationVersionUpdateMode(string $ApplicationVersionUpdateMode) Set Application version update method.
FULL: full update.
INCREMENT: incremental update.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserApplicationVersion extends AbstractModel
{
    /**
     * @var string Application version ID.
     */
    public $ApplicationVersionId;

    /**
     * @var integer Application version size.
     */
    public $ApplicationVersionSize;

    /**
     * @var string Application version status (Uploading: uploading; Creating: in creation; CreateFailed: creation failed; Deleting: deleting; Inuse: current version; Normal: to be released; Usable: available).
     */
    public $ApplicationVersionStatus;

    /**
     * @var string Application version name.
     */
    public $ApplicationVersionName;

    /**
     * @var string Application version creation time.
     */
    public $CreateTime;

    /**
     * @var array Region for application version distribution (
Standard zone:
ap-chinese-mainland: Chinese mainland
na-north-america: North America
eu-frankfurt: Frankfurt
ap-mumbai: Mumbai
ap-tokyo: Tokyo
ap-seoul: Seoul
ap-singapore: Singapore
ap-bangkok: Bangkok
ap-hongkong: Hong Kong (China)
Integration zone:
me-middle-east-fusion: Middle East
na-north-america-fusion: North America
sa-south-america-fusion: South America
ap-tokyo-fusion: Tokyo
ap-seoul-fusion: Seoul
eu-frankfurt-fusion: Frankfurt
ap-singapore-fusion: Singapore
ap-hongkong-fusion: Hong Kong (China)
).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationVersionRegions;

    /**
     * @var string Application version update method.
FULL: full update.
INCREMENT: incremental update.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationVersionUpdateMode;

    /**
     * @param string $ApplicationVersionId Application version ID.
     * @param integer $ApplicationVersionSize Application version size.
     * @param string $ApplicationVersionStatus Application version status (Uploading: uploading; Creating: in creation; CreateFailed: creation failed; Deleting: deleting; Inuse: current version; Normal: to be released; Usable: available).
     * @param string $ApplicationVersionName Application version name.
     * @param string $CreateTime Application version creation time.
     * @param array $ApplicationVersionRegions Region for application version distribution (
Standard zone:
ap-chinese-mainland: Chinese mainland
na-north-america: North America
eu-frankfurt: Frankfurt
ap-mumbai: Mumbai
ap-tokyo: Tokyo
ap-seoul: Seoul
ap-singapore: Singapore
ap-bangkok: Bangkok
ap-hongkong: Hong Kong (China)
Integration zone:
me-middle-east-fusion: Middle East
na-north-america-fusion: North America
sa-south-america-fusion: South America
ap-tokyo-fusion: Tokyo
ap-seoul-fusion: Seoul
eu-frankfurt-fusion: Frankfurt
ap-singapore-fusion: Singapore
ap-hongkong-fusion: Hong Kong (China)
).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationVersionUpdateMode Application version update method.
FULL: full update.
INCREMENT: incremental update.
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
