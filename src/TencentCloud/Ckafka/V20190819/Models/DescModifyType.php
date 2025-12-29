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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Type query response parameters structure.
 *
 * @method integer getModifyType() Obtain Specifies the renewal type.
 * @method void setModifyType(integer $ModifyType) Set Specifies the renewal type.
 * @method boolean getMigrateFlag() Obtain Specifies whether to migrate.
 * @method void setMigrateFlag(boolean $MigrateFlag) Set Specifies whether to migrate.
 * @method integer getMigrateCostTime() Obtain Estimated duration of migration in stable mode (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMigrateCostTime(integer $MigrateCostTime) Set Estimated duration of migration in stable mode (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpgradeStrategy() Obtain Upgrade mode (1: stable mode, 2: high-speed mode).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpgradeStrategy(integer $UpgradeStrategy) Set Upgrade mode (1: stable mode, 2: high-speed mode).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMigrateCostTimeHighSpeed() Obtain Indicates the estimated time for migration in high-speed mode, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMigrateCostTimeHighSpeed(integer $MigrateCostTimeHighSpeed) Set Indicates the estimated time for migration in high-speed mode, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescModifyType extends AbstractModel
{
    /**
     * @var integer Specifies the renewal type.
     */
    public $ModifyType;

    /**
     * @var boolean Specifies whether to migrate.
     */
    public $MigrateFlag;

    /**
     * @var integer Estimated duration of migration in stable mode (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MigrateCostTime;

    /**
     * @var integer Upgrade mode (1: stable mode, 2: high-speed mode).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpgradeStrategy;

    /**
     * @var integer Indicates the estimated time for migration in high-speed mode, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MigrateCostTimeHighSpeed;

    /**
     * @param integer $ModifyType Specifies the renewal type.
     * @param boolean $MigrateFlag Specifies whether to migrate.
     * @param integer $MigrateCostTime Estimated duration of migration in stable mode (seconds).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpgradeStrategy Upgrade mode (1: stable mode, 2: high-speed mode).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MigrateCostTimeHighSpeed Indicates the estimated time for migration in high-speed mode, in seconds.
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
        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("MigrateFlag",$param) and $param["MigrateFlag"] !== null) {
            $this->MigrateFlag = $param["MigrateFlag"];
        }

        if (array_key_exists("MigrateCostTime",$param) and $param["MigrateCostTime"] !== null) {
            $this->MigrateCostTime = $param["MigrateCostTime"];
        }

        if (array_key_exists("UpgradeStrategy",$param) and $param["UpgradeStrategy"] !== null) {
            $this->UpgradeStrategy = $param["UpgradeStrategy"];
        }

        if (array_key_exists("MigrateCostTimeHighSpeed",$param) and $param["MigrateCostTimeHighSpeed"] !== null) {
            $this->MigrateCostTimeHighSpeed = $param["MigrateCostTimeHighSpeed"];
        }
    }
}
