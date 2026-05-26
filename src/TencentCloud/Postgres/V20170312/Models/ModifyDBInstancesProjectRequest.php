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
 * ModifyDBInstancesProject request structure.
 *
 * @method array getDBInstanceIdSet() Obtain Specifies the instance ID set. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). supports operating multiple instances simultaneously.
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set Specifies the instance ID set. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). supports operating multiple instances simultaneously.
 * @method string getProjectId() Obtain ID of the new project it belongs to. obtain through the [DescribeProjects](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api.
 * @method void setProjectId(string $ProjectId) Set ID of the new project it belongs to. obtain through the [DescribeProjects](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api.
 */
class ModifyDBInstancesProjectRequest extends AbstractModel
{
    /**
     * @var array Specifies the instance ID set. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). supports operating multiple instances simultaneously.
     */
    public $DBInstanceIdSet;

    /**
     * @var string ID of the new project it belongs to. obtain through the [DescribeProjects](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api.
     */
    public $ProjectId;

    /**
     * @param array $DBInstanceIdSet Specifies the instance ID set. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1). supports operating multiple instances simultaneously.
     * @param string $ProjectId ID of the new project it belongs to. obtain through the [DescribeProjects](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1) api.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
