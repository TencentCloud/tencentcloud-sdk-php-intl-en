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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateDBInstances request structure.
 *
 * @method array getDBInstanceIdSet() Obtain <p>Instance ID collection, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Note: Simultaneous isolation of multiple instances is not recommended. It is advisable to import a single instance ID per operation.</p>
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set <p>Instance ID collection, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Note: Simultaneous isolation of multiple instances is not recommended. It is advisable to import a single instance ID per operation.</p>
 */
class IsolateDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>Instance ID collection, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Note: Simultaneous isolation of multiple instances is not recommended. It is advisable to import a single instance ID per operation.</p>
     */
    public $DBInstanceIdSet;

    /**
     * @param array $DBInstanceIdSet <p>Instance ID collection, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API. Note: Simultaneous isolation of multiple instances is not recommended. It is advisable to import a single instance ID per operation.</p>
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }
    }
}
