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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAddon request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getAddonName() Obtain Add-on name
 * @method void setAddonName(string $AddonName) Set Add-on name
 * @method string getAddonVersion() Obtain addon version (default does not update if not passed. if AddonVersion is not passed, RawValues must be passed.).
 * @method void setAddonVersion(string $AddonVersion) Set addon version (default does not update if not passed. if AddonVersion is not passed, RawValues must be passed.).
 * @method string getRawValues() Obtain Parameters of the addon, which is a base64-transcoded string in json format. (the addon parameters are obtained through DescribeAddonValues. when RawValues is not passed, AddonVersion must be provided.).
 * @method void setRawValues(string $RawValues) Set Parameters of the addon, which is a base64-transcoded string in json format. (the addon parameters are obtained through DescribeAddonValues. when RawValues is not passed, AddonVersion must be provided.).
 * @method string getUpdateStrategy() Obtain The update policy for the addon parameter supports two strategies: replace and merge. the default value is merge, which is compatible with old version apis. replace: use new RawValues to fully replace the original RawValues of the addon. merge: add or update the corresponding parameters in the original RawValues of the addon based on new RawValues.
 * @method void setUpdateStrategy(string $UpdateStrategy) Set The update policy for the addon parameter supports two strategies: replace and merge. the default value is merge, which is compatible with old version apis. replace: use new RawValues to fully replace the original RawValues of the addon. merge: add or update the corresponding parameters in the original RawValues of the addon based on new RawValues.
 * @method boolean getDryRun() Obtain Specifies whether to only perform an update check. when set to true, only the check is performed without updating the component.
 * @method void setDryRun(boolean $DryRun) Set Specifies whether to only perform an update check. when set to true, only the check is performed without updating the component.
 */
class UpdateAddonRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Add-on name
     */
    public $AddonName;

    /**
     * @var string addon version (default does not update if not passed. if AddonVersion is not passed, RawValues must be passed.).
     */
    public $AddonVersion;

    /**
     * @var string Parameters of the addon, which is a base64-transcoded string in json format. (the addon parameters are obtained through DescribeAddonValues. when RawValues is not passed, AddonVersion must be provided.).
     */
    public $RawValues;

    /**
     * @var string The update policy for the addon parameter supports two strategies: replace and merge. the default value is merge, which is compatible with old version apis. replace: use new RawValues to fully replace the original RawValues of the addon. merge: add or update the corresponding parameters in the original RawValues of the addon based on new RawValues.
     */
    public $UpdateStrategy;

    /**
     * @var boolean Specifies whether to only perform an update check. when set to true, only the check is performed without updating the component.
     */
    public $DryRun;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $AddonName Add-on name
     * @param string $AddonVersion addon version (default does not update if not passed. if AddonVersion is not passed, RawValues must be passed.).
     * @param string $RawValues Parameters of the addon, which is a base64-transcoded string in json format. (the addon parameters are obtained through DescribeAddonValues. when RawValues is not passed, AddonVersion must be provided.).
     * @param string $UpdateStrategy The update policy for the addon parameter supports two strategies: replace and merge. the default value is merge, which is compatible with old version apis. replace: use new RawValues to fully replace the original RawValues of the addon. merge: add or update the corresponding parameters in the original RawValues of the addon based on new RawValues.
     * @param boolean $DryRun Specifies whether to only perform an update check. when set to true, only the check is performed without updating the component.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AddonName",$param) and $param["AddonName"] !== null) {
            $this->AddonName = $param["AddonName"];
        }

        if (array_key_exists("AddonVersion",$param) and $param["AddonVersion"] !== null) {
            $this->AddonVersion = $param["AddonVersion"];
        }

        if (array_key_exists("RawValues",$param) and $param["RawValues"] !== null) {
            $this->RawValues = $param["RawValues"];
        }

        if (array_key_exists("UpdateStrategy",$param) and $param["UpdateStrategy"] !== null) {
            $this->UpdateStrategy = $param["UpdateStrategy"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
