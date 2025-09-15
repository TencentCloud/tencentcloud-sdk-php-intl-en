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
 * Configuration group specified for scale-out.
 *
 * @method string getServiceComponentName() Obtain Component version name, for example, HDFS-2.8.5.
 * @method void setServiceComponentName(string $ServiceComponentName) Set Component version name, for example, HDFS-2.8.5.
 * @method string getConfGroupName() Obtain Configuration group name, for example, hdfs-core-defaultGroup. If the ConfGroupName parameter is passed in, the configuration group dimension is used.
                                                             If the ConfGroupName parameter is not passed in, the cluster dimension is used.
 * @method void setConfGroupName(string $ConfGroupName) Set Configuration group name, for example, hdfs-core-defaultGroup. If the ConfGroupName parameter is passed in, the configuration group dimension is used.
                                                             If the ConfGroupName parameter is not passed in, the cluster dimension is used.
 */
class ScaleOutServiceConfGroupsInfo extends AbstractModel
{
    /**
     * @var string Component version name, for example, HDFS-2.8.5.
     */
    public $ServiceComponentName;

    /**
     * @var string Configuration group name, for example, hdfs-core-defaultGroup. If the ConfGroupName parameter is passed in, the configuration group dimension is used.
                                                             If the ConfGroupName parameter is not passed in, the cluster dimension is used.
     */
    public $ConfGroupName;

    /**
     * @param string $ServiceComponentName Component version name, for example, HDFS-2.8.5.
     * @param string $ConfGroupName Configuration group name, for example, hdfs-core-defaultGroup. If the ConfGroupName parameter is passed in, the configuration group dimension is used.
                                                             If the ConfGroupName parameter is not passed in, the cluster dimension is used.
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
        if (array_key_exists("ServiceComponentName",$param) and $param["ServiceComponentName"] !== null) {
            $this->ServiceComponentName = $param["ServiceComponentName"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }
    }
}
