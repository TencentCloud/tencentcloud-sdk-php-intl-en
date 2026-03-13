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
 * Manage rule associated with the lifecycle management policy.
 *
 * @method string getStorageType() Obtain Storage type after data dump. among them: InfrequentAccess: infrequent medium storage; ColdStorage: cold storage.
 * @method void setStorageType(string $StorageType) Set Storage type after data dump. among them: InfrequentAccess: infrequent medium storage; ColdStorage: cold storage.
 * @method string getFileType() Obtain Data dump FILE type. among them, BIG_FILE: extra large FILE; STD_FILE: regular FILE; SMALL_FILE: SMALL FILE; ALL: ALL files.
 * @method void setFileType(string $FileType) Set Data dump FILE type. among them, BIG_FILE: extra large FILE; STD_FILE: regular FILE; SMALL_FILE: SMALL FILE; ALL: ALL files.
 * @method string getAction() Obtain Data dumping action. among them, Archive: settlement; Noarchive: no settlement.
 * @method void setAction(string $Action) Set Data dumping action. among them, Archive: settlement; Noarchive: no settlement.
 * @method string getInterval() Obtain Data dump trigger time. consists of "DEFAULT_ATIME_" and a number, in days. keep it empty when Action is Noarchive.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInterval(string $Interval) Set Data dump trigger time. consists of "DEFAULT_ATIME_" and a number, in days. keep it empty when Action is Noarchive.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileMaxSize() Obtain Maximum specification for data dump files. the value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileMaxSize(string $FileMaxSize) Set Maximum specification for data dump files. the value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileMinSize() Obtain Minimum specification of the dump file. its numeric value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileMinSize(string $FileMinSize) Set Minimum specification of the dump file. its numeric value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyType() Obtain Policy type.
 * @method void setPolicyType(string $PolicyType) Set Policy type.
 * @method integer getExpireThreshold() Obtain Threshold range: 10-90.
 * @method void setExpireThreshold(integer $ExpireThreshold) Set Threshold range: 10-90.
 * @method integer getTargetThreshold() Obtain Threshold range: 10-90.
 * @method void setTargetThreshold(integer $TargetThreshold) Set Threshold range: 10-90.
 * @method boolean getIsOverwrite() Obtain When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time will not release hot data storage).

Default false when empty.
 * @method void setIsOverwrite(boolean $IsOverwrite) Set When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time will not release hot data storage).

Default false when empty.
 */
class LifecycleRule extends AbstractModel
{
    /**
     * @var string Storage type after data dump. among them: InfrequentAccess: infrequent medium storage; ColdStorage: cold storage.
     */
    public $StorageType;

    /**
     * @var string Data dump FILE type. among them, BIG_FILE: extra large FILE; STD_FILE: regular FILE; SMALL_FILE: SMALL FILE; ALL: ALL files.
     */
    public $FileType;

    /**
     * @var string Data dumping action. among them, Archive: settlement; Noarchive: no settlement.
     */
    public $Action;

    /**
     * @var string Data dump trigger time. consists of "DEFAULT_ATIME_" and a number, in days. keep it empty when Action is Noarchive.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Interval;

    /**
     * @var string Maximum specification for data dump files. the value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileMaxSize;

    /**
     * @var string Minimum specification of the dump file. its numeric value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileMinSize;

    /**
     * @var string Policy type.
     */
    public $PolicyType;

    /**
     * @var integer Threshold range: 10-90.
     */
    public $ExpireThreshold;

    /**
     * @var integer Threshold range: 10-90.
     */
    public $TargetThreshold;

    /**
     * @var boolean When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time will not release hot data storage).

Default false when empty.
     */
    public $IsOverwrite;

    /**
     * @param string $StorageType Storage type after data dump. among them: InfrequentAccess: infrequent medium storage; ColdStorage: cold storage.
     * @param string $FileType Data dump FILE type. among them, BIG_FILE: extra large FILE; STD_FILE: regular FILE; SMALL_FILE: SMALL FILE; ALL: ALL files.
     * @param string $Action Data dumping action. among them, Archive: settlement; Noarchive: no settlement.
     * @param string $Interval Data dump trigger time. consists of "DEFAULT_ATIME_" and a number, in days. keep it empty when Action is Noarchive.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileMaxSize Maximum specification for data dump files. the value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileMinSize Minimum specification of the dump file. its numeric value needs to use the "number+measurement unit" format, and the supported units are K (KiB), M (MiB), and G (GiB).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyType Policy type.
     * @param integer $ExpireThreshold Threshold range: 10-90.
     * @param integer $TargetThreshold Threshold range: 10-90.
     * @param boolean $IsOverwrite When a file in CFSTurbo and an external storage have the same name, whether to overwrite.

Override.

false: not overwrite (at the same time will not release hot data storage).

Default false when empty.
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("FileMaxSize",$param) and $param["FileMaxSize"] !== null) {
            $this->FileMaxSize = $param["FileMaxSize"];
        }

        if (array_key_exists("FileMinSize",$param) and $param["FileMinSize"] !== null) {
            $this->FileMinSize = $param["FileMinSize"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("ExpireThreshold",$param) and $param["ExpireThreshold"] !== null) {
            $this->ExpireThreshold = $param["ExpireThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }
    }
}
