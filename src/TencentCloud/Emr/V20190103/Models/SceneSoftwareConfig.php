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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster application scenario and supported deployment component information.
 *
 * @method array getSoftware() Obtain List of deployed components. Different EMR product versions (ProductVersion) have different optional component lists. For details about how to query the optional component lists for different product versions, see [Component Version](https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1).
Example values: hive and flink.
 * @method void setSoftware(array $Software) Set List of deployed components. Different EMR product versions (ProductVersion) have different optional component lists. For details about how to query the optional component lists for different product versions, see [Component Version](https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1).
Example values: hive and flink.
 * @method string getSceneName() Obtain Default Hadoop-Default. For details about the scenario-based values, see [Scenario Query](https://www.tencentcloud.com/document/product/589/14624?from_cn_redirect=1):
Hadoop-Kudu
Hadoop-Zookeeper
Hadoop-Presto
Hadoop-Hbase
Hadoop-Default
 * @method void setSceneName(string $SceneName) Set Default Hadoop-Default. For details about the scenario-based values, see [Scenario Query](https://www.tencentcloud.com/document/product/589/14624?from_cn_redirect=1):
Hadoop-Kudu
Hadoop-Zookeeper
Hadoop-Presto
Hadoop-Hbase
Hadoop-Default
 */
class SceneSoftwareConfig extends AbstractModel
{
    /**
     * @var array List of deployed components. Different EMR product versions (ProductVersion) have different optional component lists. For details about how to query the optional component lists for different product versions, see [Component Version](https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1).
Example values: hive and flink.
     */
    public $Software;

    /**
     * @var string Default Hadoop-Default. For details about the scenario-based values, see [Scenario Query](https://www.tencentcloud.com/document/product/589/14624?from_cn_redirect=1):
Hadoop-Kudu
Hadoop-Zookeeper
Hadoop-Presto
Hadoop-Hbase
Hadoop-Default
     */
    public $SceneName;

    /**
     * @param array $Software List of deployed components. Different EMR product versions (ProductVersion) have different optional component lists. For details about how to query the optional component lists for different product versions, see [Component Version](https://www.tencentcloud.com/document/product/589/20279?from_cn_redirect=1).
Example values: hive and flink.
     * @param string $SceneName Default Hadoop-Default. For details about the scenario-based values, see [Scenario Query](https://www.tencentcloud.com/document/product/589/14624?from_cn_redirect=1):
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
