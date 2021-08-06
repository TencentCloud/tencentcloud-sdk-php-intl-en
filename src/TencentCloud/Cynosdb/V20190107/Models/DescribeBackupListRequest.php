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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupList request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getLimit() Obtain Backup file list offset
 * @method void setLimit(integer $Limit) Set Backup file list offset
 * @method integer getOffset() Obtain Backup file list start
 * @method void setOffset(integer $Offset) Set Backup file list start
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
 */
class DescribeBackupListRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Backup file list offset
     */
    public $Limit;

    /**
     * @var integer Backup file list start
     */
    public $Offset;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Limit Backup file list offset
     * @param integer $Offset Backup file list start
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }
    }
}
