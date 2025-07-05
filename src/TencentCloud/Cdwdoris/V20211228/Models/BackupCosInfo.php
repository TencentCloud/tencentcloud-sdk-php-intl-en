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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about cos in the backup instance
 *
 * @method string getCosBucket() Obtain The cos bucket where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosBucket(string $CosBucket) Set The cos bucket where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCosPath() Obtain The full cos path where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosPath(string $CosPath) Set The full cos path where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSnapShotPath() Obtain Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapShotPath(string $SnapShotPath) Set Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupCosInfo extends AbstractModel
{
    /**
     * @var string The cos bucket where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosBucket;

    /**
     * @var string The full cos path where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosPath;

    /**
     * @var string Backup file name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapShotPath;

    /**
     * @param string $CosBucket The cos bucket where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CosPath The full cos path where the backup file is located.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SnapShotPath Backup file name
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("SnapShotPath",$param) and $param["SnapShotPath"] !== null) {
            $this->SnapShotPath = $param["SnapShotPath"];
        }
    }
}
