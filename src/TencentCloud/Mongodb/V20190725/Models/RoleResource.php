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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role resource
 *
 * @method boolean getCluster() Obtain <p>Whether cluster-level resource</p>
 * @method void setCluster(boolean $Cluster) Set <p>Whether cluster-level resource</p>
 * @method string getDatabase() Obtain <p>Database name.</p>
 * @method void setDatabase(string $Database) Set <p>Database name.</p>
 * @method string getCollection() Obtain <p>collection name.</p>
 * @method void setCollection(string $Collection) Set <p>collection name.</p>
 */
class RoleResource extends AbstractModel
{
    /**
     * @var boolean <p>Whether cluster-level resource</p>
     */
    public $Cluster;

    /**
     * @var string <p>Database name.</p>
     */
    public $Database;

    /**
     * @var string <p>collection name.</p>
     */
    public $Collection;

    /**
     * @param boolean $Cluster <p>Whether cluster-level resource</p>
     * @param string $Database <p>Database name.</p>
     * @param string $Collection <p>collection name.</p>
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
        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Collection",$param) and $param["Collection"] !== null) {
            $this->Collection = $param["Collection"];
        }
    }
}
