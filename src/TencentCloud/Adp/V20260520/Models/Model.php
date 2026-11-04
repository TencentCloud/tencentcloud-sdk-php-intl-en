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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>Model complete information</p>
 *
 * @method array getBadgeList() Obtain <p>Model badge list</p>
 * @method void setBadgeList(array $BadgeList) Set <p>Model badge list</p>
 * @method ModelDeveloperBasic getDeveloperInfo() Obtain <p>Model author information</p>
 * @method void setDeveloperInfo(ModelDeveloperBasic $DeveloperInfo) Set <p>Model author information</p>
 * @method ModelLimit getLimitInfo() Obtain <p>Model restrictive information</p>
 * @method void setLimitInfo(ModelLimit $LimitInfo) Set <p>Model restrictive information</p>
 * @method ModelBasic getModelBasic() Obtain <p>Model basic information</p>
 * @method void setModelBasic(ModelBasic $ModelBasic) Set <p>Model basic information</p>
 * @method array getParameterList() Obtain <p>Model hyperparameter configuration</p>
 * @method void setParameterList(array $ParameterList) Set <p>Model hyperparameter configuration</p>
 * @method array getPropertyList() Obtain <p>Model attribute configuration</p>
 * @method void setPropertyList(array $PropertyList) Set <p>Model attribute configuration</p>
 * @method ModelProviderBasic getProviderInfo() Obtain <p>Model provider info</p>
 * @method void setProviderInfo(ModelProviderBasic $ProviderInfo) Set <p>Model provider info</p>
 * @method ModelStatus getStatusInfo() Obtain <p>Model status information</p>
 * @method void setStatusInfo(ModelStatus $StatusInfo) Set <p>Model status information</p>
 * @method array getTagList() Obtain <p>Model tag list</p>
 * @method void setTagList(array $TagList) Set <p>Model tag list</p>
 */
class Model extends AbstractModel
{
    /**
     * @var array <p>Model badge list</p>
     */
    public $BadgeList;

    /**
     * @var ModelDeveloperBasic <p>Model author information</p>
     */
    public $DeveloperInfo;

    /**
     * @var ModelLimit <p>Model restrictive information</p>
     */
    public $LimitInfo;

    /**
     * @var ModelBasic <p>Model basic information</p>
     */
    public $ModelBasic;

    /**
     * @var array <p>Model hyperparameter configuration</p>
     */
    public $ParameterList;

    /**
     * @var array <p>Model attribute configuration</p>
     */
    public $PropertyList;

    /**
     * @var ModelProviderBasic <p>Model provider info</p>
     */
    public $ProviderInfo;

    /**
     * @var ModelStatus <p>Model status information</p>
     */
    public $StatusInfo;

    /**
     * @var array <p>Model tag list</p>
     */
    public $TagList;

    /**
     * @param array $BadgeList <p>Model badge list</p>
     * @param ModelDeveloperBasic $DeveloperInfo <p>Model author information</p>
     * @param ModelLimit $LimitInfo <p>Model restrictive information</p>
     * @param ModelBasic $ModelBasic <p>Model basic information</p>
     * @param array $ParameterList <p>Model hyperparameter configuration</p>
     * @param array $PropertyList <p>Model attribute configuration</p>
     * @param ModelProviderBasic $ProviderInfo <p>Model provider info</p>
     * @param ModelStatus $StatusInfo <p>Model status information</p>
     * @param array $TagList <p>Model tag list</p>
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
        if (array_key_exists("BadgeList",$param) and $param["BadgeList"] !== null) {
            $this->BadgeList = [];
            foreach ($param["BadgeList"] as $key => $value){
                $obj = new ModelBadge();
                $obj->deserialize($value);
                array_push($this->BadgeList, $obj);
            }
        }

        if (array_key_exists("DeveloperInfo",$param) and $param["DeveloperInfo"] !== null) {
            $this->DeveloperInfo = new ModelDeveloperBasic();
            $this->DeveloperInfo->deserialize($param["DeveloperInfo"]);
        }

        if (array_key_exists("LimitInfo",$param) and $param["LimitInfo"] !== null) {
            $this->LimitInfo = new ModelLimit();
            $this->LimitInfo->deserialize($param["LimitInfo"]);
        }

        if (array_key_exists("ModelBasic",$param) and $param["ModelBasic"] !== null) {
            $this->ModelBasic = new ModelBasic();
            $this->ModelBasic->deserialize($param["ModelBasic"]);
        }

        if (array_key_exists("ParameterList",$param) and $param["ParameterList"] !== null) {
            $this->ParameterList = [];
            foreach ($param["ParameterList"] as $key => $value){
                $obj = new ModelParameter();
                $obj->deserialize($value);
                array_push($this->ParameterList, $obj);
            }
        }

        if (array_key_exists("PropertyList",$param) and $param["PropertyList"] !== null) {
            $this->PropertyList = [];
            foreach ($param["PropertyList"] as $key => $value){
                $obj = new ModelProperty();
                $obj->deserialize($value);
                array_push($this->PropertyList, $obj);
            }
        }

        if (array_key_exists("ProviderInfo",$param) and $param["ProviderInfo"] !== null) {
            $this->ProviderInfo = new ModelProviderBasic();
            $this->ProviderInfo->deserialize($param["ProviderInfo"]);
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = new ModelStatus();
            $this->StatusInfo->deserialize($param["StatusInfo"]);
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }
    }
}
