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
 * Architecture information.
 *
 * @method string getArchitecture() Obtain <p>Architecture type.</p>
 * @method void setArchitecture(string $Architecture) Set <p>Architecture type.</p>
 * @method string getArchitectureName() Obtain <p>Architecture type name.</p>
 * @method void setArchitectureName(string $ArchitectureName) Set <p>Architecture type name.</p>
 * @method integer getOrder() Obtain <p>Architecture type display order.</p>
 * @method void setOrder(integer $Order) Set <p>Architecture type display order.</p>
 * @method array getInstanceFamilies() Obtain <p>Instance specification families included in the architecture.</p>
 * @method void setInstanceFamilies(array $InstanceFamilies) Set <p>Instance specification families included in the architecture.</p>
 */
class ArchitectureInfo extends AbstractModel
{
    /**
     * @var string <p>Architecture type.</p>
     */
    public $Architecture;

    /**
     * @var string <p>Architecture type name.</p>
     */
    public $ArchitectureName;

    /**
     * @var integer <p>Architecture type display order.</p>
     */
    public $Order;

    /**
     * @var array <p>Instance specification families included in the architecture.</p>
     */
    public $InstanceFamilies;

    /**
     * @param string $Architecture <p>Architecture type.</p>
     * @param string $ArchitectureName <p>Architecture type name.</p>
     * @param integer $Order <p>Architecture type display order.</p>
     * @param array $InstanceFamilies <p>Instance specification families included in the architecture.</p>
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
        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("ArchitectureName",$param) and $param["ArchitectureName"] !== null) {
            $this->ArchitectureName = $param["ArchitectureName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = $param["InstanceFamilies"];
        }
    }
}
