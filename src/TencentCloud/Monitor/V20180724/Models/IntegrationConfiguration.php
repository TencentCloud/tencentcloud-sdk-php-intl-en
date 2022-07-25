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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Export integration configuration
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getKind() Obtain Type
 * @method void setKind(string $Kind) Set Type
 * @method string getContent() Obtain Content
 * @method void setContent(string $Content) Set Content
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method string getCategory() Obtain Instance type
 * @method void setCategory(string $Category) Set Instance type
 * @method string getInstanceDesc() Obtain Instance description
 * @method void setInstanceDesc(string $InstanceDesc) Set Instance description
 * @method string getGrafanaDashboardURL() Obtain Dashboard URL
 * @method void setGrafanaDashboardURL(string $GrafanaDashboardURL) Set Dashboard URL
 */
class IntegrationConfiguration extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Type
     */
    public $Kind;

    /**
     * @var string Content
     */
    public $Content;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var string Instance type
     */
    public $Category;

    /**
     * @var string Instance description
     */
    public $InstanceDesc;

    /**
     * @var string Dashboard URL
     */
    public $GrafanaDashboardURL;

    /**
     * @param string $Name Name
     * @param string $Kind Type
     * @param string $Content Content
     * @param integer $Status Status
     * @param string $Category Instance type
     * @param string $InstanceDesc Instance description
     * @param string $GrafanaDashboardURL Dashboard URL
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("GrafanaDashboardURL",$param) and $param["GrafanaDashboardURL"] !== null) {
            $this->GrafanaDashboardURL = $param["GrafanaDashboardURL"];
        }
    }
}
