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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the image affected by the vulnerability
 *
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method integer getHostCount() Obtain Number of associated servers
 * @method void setHostCount(integer $HostCount) Set Number of associated servers
 * @method integer getContainerCount() Obtain Number of associated containers
 * @method void setContainerCount(integer $ContainerCount) Set Number of associated containers
 * @method array getComponentList() Obtain List of components
 * @method void setComponentList(array $ComponentList) Set List of components
 */
class VulAffectedImageInfo extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var integer Number of associated servers
     */
    public $HostCount;

    /**
     * @var integer Number of associated containers
     */
    public $ContainerCount;

    /**
     * @var array List of components
     */
    public $ComponentList;

    /**
     * @param string $ImageID Image ID
     * @param string $ImageName Image name
     * @param integer $HostCount Number of associated servers
     * @param integer $ContainerCount Number of associated containers
     * @param array $ComponentList List of components
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("ComponentList",$param) and $param["ComponentList"] !== null) {
            $this->ComponentList = [];
            foreach ($param["ComponentList"] as $key => $value){
                $obj = new VulAffectedImageComponentInfo();
                $obj->deserialize($value);
                array_push($this->ComponentList, $obj);
            }
        }
    }
}
