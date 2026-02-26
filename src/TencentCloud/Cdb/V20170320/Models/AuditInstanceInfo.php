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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit instance details.
 *
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method array getTagList() Obtain Tag information.
 * @method void setTagList(array $TagList) Set Tag information.
 * @method string getDbType() Obtain Database kernel type.
 * @method void setDbType(string $DbType) Set Database kernel type.
 * @method string getDbVersion() Obtain Database kernel version.
 * @method void setDbVersion(string $DbVersion) Set Database kernel version.
 */
class AuditInstanceInfo extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var array Tag information.
     */
    public $TagList;

    /**
     * @var string Database kernel type.
     */
    public $DbType;

    /**
     * @var string Database kernel version.
     */
    public $DbVersion;

    /**
     * @param integer $ProjectId Project ID.
     * @param array $TagList Tag information.
     * @param string $DbType Database kernel type.
     * @param string $DbVersion Database kernel version.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }
    }
}
