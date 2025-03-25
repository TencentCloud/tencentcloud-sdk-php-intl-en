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

namespace TencentCloud\Iotcloud\V20210408;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotcloud\V20210408\Models as Models;

/**
 * @method Models\CreateDeviceResponse CreateDevice(Models\CreateDeviceRequest $req) This API is used to create an IoT Hub device. 
 * @method Models\CreatePrivateCAResponse CreatePrivateCA(Models\CreatePrivateCARequest $req) This API is used to create a private CA certificate.
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) This API is used to create a new IoT communication product. 
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) This API is used to delete an IoT Hub device. 
 * @method Models\DeleteDeviceShadowResponse DeleteDeviceShadow(Models\DeleteDeviceShadowRequest $req) This API is used to delete a device shadow. 
 * @method Models\DeletePrivateCAResponse DeletePrivateCA(Models\DeletePrivateCARequest $req) This API is used to delete a private CA certificate.
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) This API is used to delete an IoT Hub product.
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) This API is used to query device details.
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) This API is used to get the list of IoT Hub devices. 
 * @method Models\DescribePrivateCAResponse DescribePrivateCA(Models\DescribePrivateCARequest $req) This API is used to query private CA certificate details.
 * @method Models\DescribePrivateCABindedProductsResponse DescribePrivateCABindedProducts(Models\DescribePrivateCABindedProductsRequest $req) This API is used to query the products bound to a private CA certificate.
 * @method Models\DescribePrivateCAsResponse DescribePrivateCAs(Models\DescribePrivateCAsRequest $req) This API is used to get the list of private CA certificates.
 * @method Models\DescribeProductResponse DescribeProduct(Models\DescribeProductRequest $req) This API is used to query product details.
 * @method Models\DescribeProductCAResponse DescribeProductCA(Models\DescribeProductCARequest $req) This API is used to query the CA certificates bound to a product.
 * @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) This API is used to obtain the product list. 
 * @method Models\SetProductsForbiddenStatusResponse SetProductsForbiddenStatus(Models\SetProductsForbiddenStatusRequest $req) This API is used to enable or disable multiple products at a time.
 * @method Models\UpdateDeviceLogLevelResponse UpdateDeviceLogLevel(Models\UpdateDeviceLogLevelRequest $req) This API is used to set the device log level.  
 * @method Models\UpdateDevicesEnableStateResponse UpdateDevicesEnableState(Models\UpdateDevicesEnableStateRequest $req) This API is used to enable or disable multiple devices. 
 * @method Models\UpdatePrivateCAResponse UpdatePrivateCA(Models\UpdatePrivateCARequest $req) This API is used to update a private CA certificate.
 * @method Models\UpdateProductDynamicRegisterResponse UpdateProductDynamicRegister(Models\UpdateProductDynamicRegisterRequest $req) This API is used to update the configuration of product dynamic registration. 
 */

class IotcloudClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iotcloud.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iotcloud";

    /**
     * @var string
     */
    protected $version = "2021-04-08";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("iotcloud")."\\"."V20210408\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
