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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstances request structure.
 *
 * @method array getInstanceIdSet() Obtain List of IDs of the instances to be reinstalled.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set List of IDs of the instances to be reinstalled.
 * @method string getImageId() Obtain ID of the image from which to install the instance. If this parameter is not specified, the current image of the instance will be used.
 * @method void setImageId(string $ImageId) Set ID of the image from which to install the instance. If this parameter is not specified, the current image of the instance will be used.
 * @method string getPassword() Obtain Password. If this parameter is not specified, the password will be subsequently displayed in the Message Center.
 * @method void setPassword(string $Password) Set Password. If this parameter is not specified, the password will be subsequently displayed in the Message Center.
 * @method EnhancedService getEnhancedService() Obtain Whether to enable CM and CWP. If this parameter is not specified, they will be enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Whether to enable CM and CWP. If this parameter is not specified, they will be enabled by default.
 * @method string getKeepData() Obtain Whether to retain the data on the data disk. Valid values: true, false. Default value: true
 * @method void setKeepData(string $KeepData) Set Whether to retain the data on the data disk. Valid values: true, false. Default value: true
 * @method string getKeepImageLogin() Obtain Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeepImageLogin(string $KeepImageLogin) Set Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ResetInstancesRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the instances to be reinstalled.
     */
    public $InstanceIdSet;

    /**
     * @var string ID of the image from which to install the instance. If this parameter is not specified, the current image of the instance will be used.
     */
    public $ImageId;

    /**
     * @var string Password. If this parameter is not specified, the password will be subsequently displayed in the Message Center.
     */
    public $Password;

    /**
     * @var EnhancedService Whether to enable CM and CWP. If this parameter is not specified, they will be enabled by default.
     */
    public $EnhancedService;

    /**
     * @var string Whether to retain the data on the data disk. Valid values: true, false. Default value: true
     */
    public $KeepData;

    /**
     * @var string Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeepImageLogin;

    /**
     * @param array $InstanceIdSet List of IDs of the instances to be reinstalled.
     * @param string $ImageId ID of the image from which to install the instance. If this parameter is not specified, the current image of the instance will be used.
     * @param string $Password Password. If this parameter is not specified, the password will be subsequently displayed in the Message Center.
     * @param EnhancedService $EnhancedService Whether to enable CM and CWP. If this parameter is not specified, they will be enabled by default.
     * @param string $KeepData Whether to retain the data on the data disk. Valid values: true, false. Default value: true
     * @param string $KeepImageLogin Whether to keep the original settings for the image. You cannot specify this parameter if `Password` or `KeyIds.N` is specified. You can specify this parameter as `TRUE` only when you create an instance by using a custom image, shared image, or image imported from an external resource. Valid values:
TRUE: yes
FALSE: no

Default value: FALSE.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("KeepData",$param) and $param["KeepData"] !== null) {
            $this->KeepData = $param["KeepData"];
        }

        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            $this->KeepImageLogin = $param["KeepImageLogin"];
        }
    }
}
