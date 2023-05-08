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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetBackupExpireRule request structure.
 *
 * @method string getClusterId() Obtain The ID of the cluster where the tables reside
 * @method void setClusterId(string $ClusterId) Set The ID of the cluster where the tables reside
 * @method array getBackupExpireRules() Obtain Array of retention policies
 * @method void setBackupExpireRules(array $BackupExpireRules) Set Array of retention policies
 */
class SetBackupExpireRuleRequest extends AbstractModel
{
    /**
     * @var string The ID of the cluster where the tables reside
     */
    public $ClusterId;

    /**
     * @var array Array of retention policies
     */
    public $BackupExpireRules;

    /**
     * @param string $ClusterId The ID of the cluster where the tables reside
     * @param array $BackupExpireRules Array of retention policies
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupExpireRules",$param) and $param["BackupExpireRules"] !== null) {
            $this->BackupExpireRules = [];
            foreach ($param["BackupExpireRules"] as $key => $value){
                $obj = new BackupExpireRuleInfo();
                $obj->deserialize($value);
                array_push($this->BackupExpireRules, $obj);
            }
        }
    }
}
