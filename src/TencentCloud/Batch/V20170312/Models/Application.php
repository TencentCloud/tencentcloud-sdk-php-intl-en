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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application information
 *
 * @method string getCommand() Obtain Task execution command
 * @method void setCommand(string $Command) Set Task execution command
 * @method string getDeliveryForm() Obtain Delivery form of the application. Values: `PACKAGE` (package stored in a remote location), `LOCAL` (local computer).
 * @method void setDeliveryForm(string $DeliveryForm) Set Delivery form of the application. Values: `PACKAGE` (package stored in a remote location), `LOCAL` (local computer).
 * @method string getPackagePath() Obtain Remote storage path of the application package
 * @method void setPackagePath(string $PackagePath) Set Remote storage path of the application package
 * @method Docker getDocker() Obtain Relevant configuration of the Docker used by the application. In case that the Docker configuration is used, "LOCAL" DeliveryForm means that the application software inside the Docker image is used directly and run in Docker mode; "PACKAGE" DeliveryForm means that the remote application package is run in Docker mode after being injected into the Docker image. To avoid compatibility issues with different versions of Docker, the Docker installation package and relevant dependencies are taken care of by BatchCompute. For custom images where Docker has already been installed, uninstall Docker first and then use the Docker feature.
 * @method void setDocker(Docker $Docker) Set Relevant configuration of the Docker used by the application. In case that the Docker configuration is used, "LOCAL" DeliveryForm means that the application software inside the Docker image is used directly and run in Docker mode; "PACKAGE" DeliveryForm means that the remote application package is run in Docker mode after being injected into the Docker image. To avoid compatibility issues with different versions of Docker, the Docker installation package and relevant dependencies are taken care of by BatchCompute. For custom images where Docker has already been installed, uninstall Docker first and then use the Docker feature.
 */
class Application extends AbstractModel
{
    /**
     * @var string Task execution command
     */
    public $Command;

    /**
     * @var string Delivery form of the application. Values: `PACKAGE` (package stored in a remote location), `LOCAL` (local computer).
     */
    public $DeliveryForm;

    /**
     * @var string Remote storage path of the application package
     */
    public $PackagePath;

    /**
     * @var Docker Relevant configuration of the Docker used by the application. In case that the Docker configuration is used, "LOCAL" DeliveryForm means that the application software inside the Docker image is used directly and run in Docker mode; "PACKAGE" DeliveryForm means that the remote application package is run in Docker mode after being injected into the Docker image. To avoid compatibility issues with different versions of Docker, the Docker installation package and relevant dependencies are taken care of by BatchCompute. For custom images where Docker has already been installed, uninstall Docker first and then use the Docker feature.
     */
    public $Docker;

    /**
     * @param string $Command Task execution command
     * @param string $DeliveryForm Delivery form of the application. Values: `PACKAGE` (package stored in a remote location), `LOCAL` (local computer).
     * @param string $PackagePath Remote storage path of the application package
     * @param Docker $Docker Relevant configuration of the Docker used by the application. In case that the Docker configuration is used, "LOCAL" DeliveryForm means that the application software inside the Docker image is used directly and run in Docker mode; "PACKAGE" DeliveryForm means that the remote application package is run in Docker mode after being injected into the Docker image. To avoid compatibility issues with different versions of Docker, the Docker installation package and relevant dependencies are taken care of by BatchCompute. For custom images where Docker has already been installed, uninstall Docker first and then use the Docker feature.
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
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("DeliveryForm",$param) and $param["DeliveryForm"] !== null) {
            $this->DeliveryForm = $param["DeliveryForm"];
        }

        if (array_key_exists("PackagePath",$param) and $param["PackagePath"] !== null) {
            $this->PackagePath = $param["PackagePath"];
        }

        if (array_key_exists("Docker",$param) and $param["Docker"] !== null) {
            $this->Docker = new Docker();
            $this->Docker->deserialize($param["Docker"]);
        }
    }
}
