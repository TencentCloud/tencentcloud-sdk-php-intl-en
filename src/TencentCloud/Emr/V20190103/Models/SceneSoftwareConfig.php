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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The configuration of cluster application scenario and supported components.
 *
 * @method array getSoftware() Obtain The list of deployed components. The list of component options varies by `ProductVersion` (EMR version). For more information, see [Component Version](https://intl.cloud.tencent.com/document/product/589/20279?from_cn_redirect=1).
The instance type, `hive` or `flink`.
 * @method void setSoftware(array $Software) Set The list of deployed components. The list of component options varies by `ProductVersion` (EMR version). For more information, see [Component Version](https://intl.cloud.tencent.com/document/product/589/20279?from_cn_redirect=1).
The instance type, `hive` or `flink`.
 * @method string getSceneName() Obtain The scenario name, which defaults to `Hadoop-Default`. For more details, see [here](https://intl.cloud.tencent.com/document/product/589/14624?from_cn_redirect=1). Valid values:
Hadoop-Kudu
Hadoop-Zookeeper
Hadoop-Presto
Hadoop-Hbase
Hadoop-Default
 * @method void setSceneName(string $SceneName) Set The scenario name, which defaults to `Hadoop-Default`. For more details, see [here](https://intl.cloud.tencent.com/document/product/589/14624?from_cn_redirect=1). Valid values:
Hadoop-Kudu
Hadoop-Zookeeper
Hadoop-Presto
Hadoop-Hbase
Hadoop-Default
 */
class SceneSoftwareConfig extends AbstractModel
{
    /**
     * @var array The list of deployed components. The list of component options varies by `ProductVersion` (EMR version). For more information, see [Component Version](https://intl.cloud.tencent.com/document/product/589/20279?from_cn_redirect=1).
The instance type, `hive` or `flink`.
     */
    public $Software;

    /**
     * @var string The scenario name, which defaults to `Hadoop-Default`. For more details, see [here](https://intl.cloud.tencent.com/document/product/589/14624?from_cn_redirect=1). Valid values:
Hadoop-Kudu
Hadoop-Zookeeper
Hadoop-Presto
Hadoop-Hbase
Hadoop-Default
     */
    public $SceneName;

    /**
     * @param array $Software The list of deployed components. The list of component options varies by `ProductVersion` (EMR version). For more information, see [Component Version](https://intl.cloud.tencent.com/document/product/589/20279?from_cn_redirect=1).
The instance type, `hive` or `flink`.
     * @param string $SceneName The scenario name, which defaults to `Hadoop-Default`. For more details, see [here](https://intl.cloud.tencent.com/document/product/589/14624?from_cn_redirect=1). Valid values:
Hadoop-Kudu
Hadoop-Zookeeper
Hadoop-Presto
Hadoop-Hbase
Hadoop-Default
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
        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }
    }
}
