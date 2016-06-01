<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'acme.demo.listener' => 'getAcme_Demo_ListenerService',
            'admin.produit' => 'getAdmin_ProduitService',
            'admin.service' => 'getAdmin_ServiceService',
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_comment.entity_manager' => 'getFosComment_EntityManagerService',
            'fos_comment.form_factory.comment' => 'getFosComment_FormFactory_CommentService',
            'fos_comment.form_factory.commentable_thread' => 'getFosComment_FormFactory_CommentableThreadService',
            'fos_comment.form_factory.delete_comment' => 'getFosComment_FormFactory_DeleteCommentService',
            'fos_comment.form_factory.thread' => 'getFosComment_FormFactory_ThreadService',
            'fos_comment.form_factory.vote' => 'getFosComment_FormFactory_VoteService',
            'fos_comment.form_type.comment.default' => 'getFosComment_FormType_Comment_DefaultService',
            'fos_comment.form_type.commentable_thread.default' => 'getFosComment_FormType_CommentableThread_DefaultService',
            'fos_comment.form_type.delete_comment.default' => 'getFosComment_FormType_DeleteComment_DefaultService',
            'fos_comment.form_type.thread.default' => 'getFosComment_FormType_Thread_DefaultService',
            'fos_comment.form_type.vote.default' => 'getFosComment_FormType_Vote_DefaultService',
            'fos_comment.listener.closed_threads' => 'getFosComment_Listener_ClosedThreadsService',
            'fos_comment.listener.comment_blamer' => 'getFosComment_Listener_CommentBlamerService',
            'fos_comment.listener.comment_vote_score' => 'getFosComment_Listener_CommentVoteScoreService',
            'fos_comment.listener.thread_counters' => 'getFosComment_Listener_ThreadCountersService',
            'fos_comment.listener.thread_permalink' => 'getFosComment_Listener_ThreadPermalinkService',
            'fos_comment.listener.vote_blamer' => 'getFosComment_Listener_VoteBlamerService',
            'fos_comment.manager.comment.default' => 'getFosComment_Manager_Comment_DefaultService',
            'fos_comment.manager.thread.default' => 'getFosComment_Manager_Thread_DefaultService',
            'fos_comment.manager.vote.default' => 'getFosComment_Manager_Vote_DefaultService',
            'fos_comment.sorting_factory' => 'getFosComment_SortingFactoryService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.exception_format_negotiator' => 'getFosRest_ExceptionFormatNegotiatorService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.serializer.exception_wrapper_normalizer' => 'getFosRest_Serializer_ExceptionWrapperNormalizerService',
            'fos_rest.serializer.exception_wrapper_serialize_handler' => 'getFosRest_Serializer_ExceptionWrapperSerializeHandlerService',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.violation_formatter' => 'getFosRest_ViolationFormatterService',
            'fos_user.change_password.form' => 'getFosUser_ChangePassword_FormService',
            'fos_user.change_password.form.handler.default' => 'getFosUser_ChangePassword_Form_Handler_DefaultService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form' => 'getFosUser_Group_FormService',
            'fos_user.group.form.handler' => 'getFosUser_Group_Form_HandlerService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form' => 'getFosUser_Profile_FormService',
            'fos_user.profile.form.handler' => 'getFosUser_Profile_Form_HandlerService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form' => 'getFosUser_Registration_FormService',
            'fos_user.registration.form.handler' => 'getFosUser_Registration_Form_HandlerService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form' => 'getFosUser_Resetting_FormService',
            'fos_user.resetting.form.handler' => 'getFosUser_Resetting_Form_HandlerService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.templating.helper' => 'getIvoryCkEditor_Templating_HelperService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'ivory_google_map.bound' => 'getIvoryGoogleMap_BoundService',
            'ivory_google_map.bound.builder' => 'getIvoryGoogleMap_Bound_BuilderService',
            'ivory_google_map.business_account' => 'getIvoryGoogleMap_BusinessAccountService',
            'ivory_google_map.circle' => 'getIvoryGoogleMap_CircleService',
            'ivory_google_map.circle.builder' => 'getIvoryGoogleMap_Circle_BuilderService',
            'ivory_google_map.coordinate' => 'getIvoryGoogleMap_CoordinateService',
            'ivory_google_map.coordinate.builder' => 'getIvoryGoogleMap_Coordinate_BuilderService',
            'ivory_google_map.encoded_polyline' => 'getIvoryGoogleMap_EncodedPolylineService',
            'ivory_google_map.encoded_polyline.builder' => 'getIvoryGoogleMap_EncodedPolyline_BuilderService',
            'ivory_google_map.event' => 'getIvoryGoogleMap_EventService',
            'ivory_google_map.event.builder' => 'getIvoryGoogleMap_Event_BuilderService',
            'ivory_google_map.event_manager' => 'getIvoryGoogleMap_EventManagerService',
            'ivory_google_map.event_manager.builder' => 'getIvoryGoogleMap_EventManager_BuilderService',
            'ivory_google_map.ground_overlay' => 'getIvoryGoogleMap_GroundOverlayService',
            'ivory_google_map.ground_overlay.builder' => 'getIvoryGoogleMap_GroundOverlay_BuilderService',
            'ivory_google_map.helper.api' => 'getIvoryGoogleMap_Helper_ApiService',
            'ivory_google_map.helper.bound' => 'getIvoryGoogleMap_Helper_BoundService',
            'ivory_google_map.helper.coordinate' => 'getIvoryGoogleMap_Helper_CoordinateService',
            'ivory_google_map.helper.map' => 'getIvoryGoogleMap_Helper_MapService',
            'ivory_google_map.info_window' => 'getIvoryGoogleMap_InfoWindowService',
            'ivory_google_map.info_window.builder' => 'getIvoryGoogleMap_InfoWindow_BuilderService',
            'ivory_google_map.kml_layer' => 'getIvoryGoogleMap_KmlLayerService',
            'ivory_google_map.kml_layer.builder' => 'getIvoryGoogleMap_KmlLayer_BuilderService',
            'ivory_google_map.map' => 'getIvoryGoogleMap_MapService',
            'ivory_google_map.map.builder' => 'getIvoryGoogleMap_Map_BuilderService',
            'ivory_google_map.map_type_control' => 'getIvoryGoogleMap_MapTypeControlService',
            'ivory_google_map.map_type_control.builder' => 'getIvoryGoogleMap_MapTypeControl_BuilderService',
            'ivory_google_map.marker' => 'getIvoryGoogleMap_MarkerService',
            'ivory_google_map.marker.builder' => 'getIvoryGoogleMap_Marker_BuilderService',
            'ivory_google_map.marker_cluster' => 'getIvoryGoogleMap_MarkerClusterService',
            'ivory_google_map.marker_cluster.builder' => 'getIvoryGoogleMap_MarkerCluster_BuilderService',
            'ivory_google_map.marker_image' => 'getIvoryGoogleMap_MarkerImageService',
            'ivory_google_map.marker_image.builder' => 'getIvoryGoogleMap_MarkerImage_BuilderService',
            'ivory_google_map.marker_shape' => 'getIvoryGoogleMap_MarkerShapeService',
            'ivory_google_map.marker_shape.builder' => 'getIvoryGoogleMap_MarkerShape_BuilderService',
            'ivory_google_map.overview_map_control' => 'getIvoryGoogleMap_OverviewMapControlService',
            'ivory_google_map.overview_map_control.builder' => 'getIvoryGoogleMap_OverviewMapControl_BuilderService',
            'ivory_google_map.pan_control' => 'getIvoryGoogleMap_PanControlService',
            'ivory_google_map.pan_control.builder' => 'getIvoryGoogleMap_PanControl_BuilderService',
            'ivory_google_map.places_autocomplete.form.type' => 'getIvoryGoogleMap_PlacesAutocomplete_Form_TypeService',
            'ivory_google_map.places_autocomplete.helper' => 'getIvoryGoogleMap_PlacesAutocomplete_HelperService',
            'ivory_google_map.point' => 'getIvoryGoogleMap_PointService',
            'ivory_google_map.point.builder' => 'getIvoryGoogleMap_Point_BuilderService',
            'ivory_google_map.polygon' => 'getIvoryGoogleMap_PolygonService',
            'ivory_google_map.polygon.builder' => 'getIvoryGoogleMap_Polygon_BuilderService',
            'ivory_google_map.polyline' => 'getIvoryGoogleMap_PolylineService',
            'ivory_google_map.polyline.builder' => 'getIvoryGoogleMap_Polyline_BuilderService',
            'ivory_google_map.rectangle' => 'getIvoryGoogleMap_RectangleService',
            'ivory_google_map.rectangle.builder' => 'getIvoryGoogleMap_Rectangle_BuilderService',
            'ivory_google_map.rotate_control' => 'getIvoryGoogleMap_RotateControlService',
            'ivory_google_map.rotate_control.builder' => 'getIvoryGoogleMap_RotateControl_BuilderService',
            'ivory_google_map.scale_control' => 'getIvoryGoogleMap_ScaleControlService',
            'ivory_google_map.scale_control.builder' => 'getIvoryGoogleMap_ScaleControl_BuilderService',
            'ivory_google_map.size' => 'getIvoryGoogleMap_SizeService',
            'ivory_google_map.size.builder' => 'getIvoryGoogleMap_Size_BuilderService',
            'ivory_google_map.street_view_control' => 'getIvoryGoogleMap_StreetViewControlService',
            'ivory_google_map.street_view_control.builder' => 'getIvoryGoogleMap_StreetViewControl_BuilderService',
            'ivory_google_map.template.helper' => 'getIvoryGoogleMap_Template_HelperService',
            'ivory_google_map.zoom_control' => 'getIvoryGoogleMap_ZoomControlService',
            'ivory_google_map.zoom_control.builder' => 'getIvoryGoogleMap_ZoomControl_BuilderService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel' => 'getKernelService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'liuggio_stats_d.service' => 'getLiuggioStatsD_ServiceService',
            'liuggio_stats_d_client.collector.service' => 'getLiuggioStatsDClient_Collector_ServiceService',
            'liuggio_stats_d_client.factory' => 'getLiuggioStatsDClient_FactoryService',
            'liuggio_stats_d_client.sender.service' => 'getLiuggioStatsDClient_Sender_ServiceService',
            'liuggio_stats_d_client.service' => 'getLiuggioStatsDClient_ServiceService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'markdown.parser' => 'getMarkdown_ParserService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.console_very_verbose' => 'getMonolog_Handler_ConsoleVeryVerboseService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'nomaya.socialbarhelper' => 'getNomaya_SocialbarhelperService',
            'nomaya.sociallinkshelper' => 'getNomaya_SociallinkshelperService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.extension.field.mopa' => 'getSonata_Admin_Form_Extension_Field_MopaService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.model_autocomplete' => 'getSonata_Admin_Form_Type_ModelAutocompleteService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.cache' => 'getSonata_Admin_Route_CacheService',
            'sonata.admin.route.cache_warmup' => 'getSonata_Admin_Route_CacheWarmupService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.classification.admin.category' => 'getSonata_Classification_Admin_CategoryService',
            'sonata.classification.admin.collection' => 'getSonata_Classification_Admin_CollectionService',
            'sonata.classification.admin.tag' => 'getSonata_Classification_Admin_TagService',
            'sonata.classification.api.form.type.category' => 'getSonata_Classification_Api_Form_Type_CategoryService',
            'sonata.classification.api.form.type.collection' => 'getSonata_Classification_Api_Form_Type_CollectionService',
            'sonata.classification.api.form.type.tag' => 'getSonata_Classification_Api_Form_Type_TagService',
            'sonata.classification.controller.api.category' => 'getSonata_Classification_Controller_Api_CategoryService',
            'sonata.classification.controller.api.collection' => 'getSonata_Classification_Controller_Api_CollectionService',
            'sonata.classification.controller.api.tag' => 'getSonata_Classification_Controller_Api_TagService',
            'sonata.classification.form.type.category_selector' => 'getSonata_Classification_Form_Type_CategorySelectorService',
            'sonata.classification.manager.category' => 'getSonata_Classification_Manager_CategoryService',
            'sonata.classification.manager.collection' => 'getSonata_Classification_Manager_CollectionService',
            'sonata.classification.manager.tag' => 'getSonata_Classification_Manager_TagService',
            'sonata.classification.serializer.handler.category' => 'getSonata_Classification_Serializer_Handler_CategoryService',
            'sonata.classification.serializer.handler.collection' => 'getSonata_Classification_Serializer_Handler_CollectionService',
            'sonata.classification.serializer.handler.tag' => 'getSonata_Classification_Serializer_Handler_TagService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.color_selector' => 'getSonata_Core_Form_Type_ColorSelectorService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.date_range_picker' => 'getSonata_Core_Form_Type_DateRangePickerService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.datetime_range_picker' => 'getSonata_Core_Form_Type_DatetimeRangePickerService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.slugify.cocur' => 'getSonata_Core_Slugify_CocurService',
            'sonata.core.slugify.native' => 'getSonata_Core_Slugify_NativeService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.extension.wrapping' => 'getSonata_Core_Twig_Extension_WrappingService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.core.validator.inline' => 'getSonata_Core_Validator_InlineService',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService',
            'sonata.easy_extends.generator.serializer' => 'getSonata_EasyExtends_Generator_SerializerService',
            'sonata.formatter.block.formatter' => 'getSonata_Formatter_Block_FormatterService',
            'sonata.formatter.ckeditor.extension' => 'getSonata_Formatter_Ckeditor_ExtensionService',
            'sonata.formatter.form.type.selector' => 'getSonata_Formatter_Form_Type_SelectorService',
            'sonata.formatter.pool' => 'getSonata_Formatter_PoolService',
            'sonata.formatter.text.markdown' => 'getSonata_Formatter_Text_MarkdownService',
            'sonata.formatter.text.raw' => 'getSonata_Formatter_Text_RawService',
            'sonata.formatter.text.text' => 'getSonata_Formatter_Text_TextService',
            'sonata.formatter.text.twigengine' => 'getSonata_Formatter_Text_TwigengineService',
            'sonata.formatter.twig.control_flow' => 'getSonata_Formatter_Twig_ControlFlowService',
            'sonata.formatter.twig.env.markdown' => 'getSonata_Formatter_Twig_Env_MarkdownService',
            'sonata.formatter.twig.env.rawhtml' => 'getSonata_Formatter_Twig_Env_RawhtmlService',
            'sonata.formatter.twig.env.richhtml' => 'getSonata_Formatter_Twig_Env_RichhtmlService',
            'sonata.formatter.twig.env.text' => 'getSonata_Formatter_Twig_Env_TextService',
            'sonata.formatter.twig.gist' => 'getSonata_Formatter_Twig_GistService',
            'sonata.formatter.validator.formatter' => 'getSonata_Formatter_Validator_FormatterService',
            'sonata.intl.locale_detector.request_stack' => 'getSonata_Intl_LocaleDetector_RequestStackService',
            'sonata.intl.templating.helper.datetime' => 'getSonata_Intl_Templating_Helper_DatetimeService',
            'sonata.intl.templating.helper.locale' => 'getSonata_Intl_Templating_Helper_LocaleService',
            'sonata.intl.templating.helper.number' => 'getSonata_Intl_Templating_Helper_NumberService',
            'sonata.intl.timezone_detector.chain' => 'getSonata_Intl_TimezoneDetector_ChainService',
            'sonata.intl.timezone_detector.locale' => 'getSonata_Intl_TimezoneDetector_LocaleService',
            'sonata.intl.timezone_detector.user' => 'getSonata_Intl_TimezoneDetector_UserService',
            'sonata.media.adapter.filesystem.local' => 'getSonata_Media_Adapter_Filesystem_LocalService',
            'sonata.media.adapter.image.gd' => 'getSonata_Media_Adapter_Image_GdService',
            'sonata.media.adapter.image.gmagick' => 'getSonata_Media_Adapter_Image_GmagickService',
            'sonata.media.adapter.image.imagick' => 'getSonata_Media_Adapter_Image_ImagickService',
            'sonata.media.adapter.service.s3' => 'getSonata_Media_Adapter_Service_S3Service',
            'sonata.media.admin.gallery' => 'getSonata_Media_Admin_GalleryService',
            'sonata.media.admin.gallery_has_media' => 'getSonata_Media_Admin_GalleryHasMediaService',
            'sonata.media.admin.media' => 'getSonata_Media_Admin_MediaService',
            'sonata.media.admin.media.manager' => 'getSonata_Media_Admin_Media_ManagerService',
            'sonata.media.api.form.type.doctrine.media' => 'getSonata_Media_Api_Form_Type_Doctrine_MediaService',
            'sonata.media.api.form.type.gallery' => 'getSonata_Media_Api_Form_Type_GalleryService',
            'sonata.media.api.form.type.gallery_has_media' => 'getSonata_Media_Api_Form_Type_GalleryHasMediaService',
            'sonata.media.api.form.type.media' => 'getSonata_Media_Api_Form_Type_MediaService',
            'sonata.media.block.feature_media' => 'getSonata_Media_Block_FeatureMediaService',
            'sonata.media.block.gallery' => 'getSonata_Media_Block_GalleryService',
            'sonata.media.block.media' => 'getSonata_Media_Block_MediaService',
            'sonata.media.buzz.browser' => 'getSonata_Media_Buzz_BrowserService',
            'sonata.media.buzz.connector.curl' => 'getSonata_Media_Buzz_Connector_CurlService',
            'sonata.media.buzz.connector.file_get_contents' => 'getSonata_Media_Buzz_Connector_FileGetContentsService',
            'sonata.media.cdn.server' => 'getSonata_Media_Cdn_ServerService',
            'sonata.media.doctrine.event_subscriber' => 'getSonata_Media_Doctrine_EventSubscriberService',
            'sonata.media.filesystem.local' => 'getSonata_Media_Filesystem_LocalService',
            'sonata.media.form.type.media' => 'getSonata_Media_Form_Type_MediaService',
            'sonata.media.formatter.twig' => 'getSonata_Media_Formatter_TwigService',
            'sonata.media.generator.default' => 'getSonata_Media_Generator_DefaultService',
            'sonata.media.manager.gallery' => 'getSonata_Media_Manager_GalleryService',
            'sonata.media.manager.media' => 'getSonata_Media_Manager_MediaService',
            'sonata.media.metadata.amazon' => 'getSonata_Media_Metadata_AmazonService',
            'sonata.media.metadata.noop' => 'getSonata_Media_Metadata_NoopService',
            'sonata.media.metadata.proxy' => 'getSonata_Media_Metadata_ProxyService',
            'sonata.media.pool' => 'getSonata_Media_PoolService',
            'sonata.media.provider.dailymotion' => 'getSonata_Media_Provider_DailymotionService',
            'sonata.media.provider.file' => 'getSonata_Media_Provider_FileService',
            'sonata.media.provider.image' => 'getSonata_Media_Provider_ImageService',
            'sonata.media.provider.vimeo' => 'getSonata_Media_Provider_VimeoService',
            'sonata.media.provider.youtube' => 'getSonata_Media_Provider_YoutubeService',
            'sonata.media.resizer.simple' => 'getSonata_Media_Resizer_SimpleService',
            'sonata.media.resizer.square' => 'getSonata_Media_Resizer_SquareService',
            'sonata.media.security.connected_strategy' => 'getSonata_Media_Security_ConnectedStrategyService',
            'sonata.media.security.forbidden_strategy' => 'getSonata_Media_Security_ForbiddenStrategyService',
            'sonata.media.security.public_strategy' => 'getSonata_Media_Security_PublicStrategyService',
            'sonata.media.security.superadmin_strategy' => 'getSonata_Media_Security_SuperadminStrategyService',
            'sonata.media.serializer.handler.gallery' => 'getSonata_Media_Serializer_Handler_GalleryService',
            'sonata.media.serializer.handler.media' => 'getSonata_Media_Serializer_Handler_MediaService',
            'sonata.media.thumbnail.format' => 'getSonata_Media_Thumbnail_FormatService',
            'sonata.media.twig.extension' => 'getSonata_Media_Twig_ExtensionService',
            'sonata.media.twig.global' => 'getSonata_Media_Twig_GlobalService',
            'sonata.media.validator.format' => 'getSonata_Media_Validator_FormatService',
            'sonata.news.admin.comment' => 'getSonata_News_Admin_CommentService',
            'sonata.news.admin.post' => 'getSonata_News_Admin_PostService',
            'sonata.news.block.breadcrumb_archive' => 'getSonata_News_Block_BreadcrumbArchiveService',
            'sonata.news.block.breadcrumb_post' => 'getSonata_News_Block_BreadcrumbPostService',
            'sonata.news.block.recent_comments' => 'getSonata_News_Block_RecentCommentsService',
            'sonata.news.block.recent_posts' => 'getSonata_News_Block_RecentPostsService',
            'sonata.news.blog' => 'getSonata_News_BlogService',
            'sonata.news.form.type.comment' => 'getSonata_News_Form_Type_CommentService',
            'sonata.news.hash.generator' => 'getSonata_News_Hash_GeneratorService',
            'sonata.news.mailer' => 'getSonata_News_MailerService',
            'sonata.news.manager.comment' => 'getSonata_News_Manager_CommentService',
            'sonata.news.manager.post' => 'getSonata_News_Manager_PostService',
            'sonata.news.permalink.collection' => 'getSonata_News_Permalink_CollectionService',
            'sonata.news.permalink.date' => 'getSonata_News_Permalink_DateService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.block.account' => 'getSonata_User_Block_AccountService',
            'sonata.user.block.menu' => 'getSonata_User_Block_MenuService',
            'sonata.user.editable_role_builder' => 'getSonata_User_EditableRoleBuilderService',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService',
            'sonata.user.google.authenticator' => 'getSonata_User_Google_AuthenticatorService',
            'sonata.user.google.authenticator.interactive_login_listener' => 'getSonata_User_Google_Authenticator_InteractiveLoginListenerService',
            'sonata.user.google.authenticator.provider' => 'getSonata_User_Google_Authenticator_ProviderService',
            'sonata.user.google.authenticator.request_listener' => 'getSonata_User_Google_Authenticator_RequestListenerService',
            'sonata.user.profile.form' => 'getSonata_User_Profile_FormService',
            'sonata.user.profile.form.handler' => 'getSonata_User_Profile_Form_HandlerService',
            'sonata.user.profile.form.type' => 'getSonata_User_Profile_Form_TypeService',
            'sonata.user.profile.menu_builder' => 'getSonata_User_Profile_MenuBuilderService',
            'sonata.user.twig.global' => 'getSonata_User_Twig_GlobalService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.acme.demo' => 'getTwig_Extension_Acme_DemoService',
            'twig.extension.nomaya_social_bar' => 'getTwig_Extension_NomayaSocialBarService',
            'twig.extension.nomaya_social_links' => 'getTwig_Extension_NomayaSocialLinksService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'debug.templating.engine.twig' => 'templating',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_comment.manager.comment' => 'fos_comment.manager.comment.default',
            'fos_comment.manager.thread' => 'fos_comment.manager.thread.default',
            'fos_comment.manager.vote' => 'fos_comment.manager.vote.default',
            'fos_rest.exception_handler' => 'fos_rest.view.exception_wrapper_handler',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'router',
            'fos_rest.serializer' => 'jms_serializer',
            'fos_rest.templating' => 'templating',
            'fos_user.change_password.form.handler' => 'fos_user.change_password.form.handler.default',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'serializer' => 'jms_serializer',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.intl.locale_detector' => 'sonata.intl.locale_detector.request_stack',
            'sonata.intl.timezone_detector' => 'sonata.intl.timezone_detector.chain',
            'sonata.news.permalink.generator' => 'sonata.news.permalink.date',
            'sonata.user.authentication.form' => 'fos_user.profile.form',
            'sonata.user.authentication.form_handler' => 'fos_user.profile.form.handler',
            'statsd' => 'liuggio_stats_d.service',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'acme.demo.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Acme\DemoBundle\EventListener\ControllerListener A Acme\DemoBundle\EventListener\ControllerListener instance.
     */
    protected function getAcme_Demo_ListenerService()
    {
        return $this->services['acme.demo.listener'] = new \Acme\DemoBundle\EventListener\ControllerListener($this->get('twig.extension.acme.demo'));
    }

    /**
     * Gets the 'admin.produit' service.
     *
     * @return \Application\ProduitBundle\Admin\ProduitAdmin A Application\ProduitBundle\Admin\ProduitAdmin instance.
     */
    protected function getAdmin_ProduitService()
    {
        $instance = new \Application\ProduitBundle\Admin\ProduitAdmin('admin.produit', 'Application\\ProduitBundle\\Entity\\Produit', 'SonataAdminBundle:CRUD');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Produit');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'admin.service' service.
     *
     * @return \Application\ServiceBundle\Admin\ServiceAdmin A Application\ServiceBundle\Admin\ServiceAdmin instance.
     */
    protected function getAdmin_ServiceService()
    {
        $instance = new \Application\ServiceBundle\Admin\ServiceAdmin('admin.service', 'Application\\ServiceBundle\\Entity\\Service', 'SonataAdminBundle:CRUD');

        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('Service');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), (__DIR__.'/annotations'), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSCommentBundle', ($this->targetDirs[2].'/Resources/FOSCommentBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSCommentBundle', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('assetic.asset_manager'), new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => $this->get('sonata.admin.route.cache_warmup')));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance.
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance.
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance.
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener('', $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance.
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('data_collector.dump'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'sonata.user.google.authenticator.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'sonata.user.google.authenticator.request_listener', 1 => 'onCoreRequest'), -1);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.controller', array(0 => 'acme.demo.listener', 1 => 'onKernelController'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('monolog.handler.console_very_verbose', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_comment.listener.comment_vote_score', 'FOS\\CommentBundle\\EventListener\\CommentVoteScoreListener');
        $instance->addSubscriberService('fos_comment.listener.thread_counters', 'FOS\\CommentBundle\\EventListener\\ThreadCountersListener');
        $instance->addSubscriberService('fos_comment.listener.thread_permalink', 'FOS\\CommentBundle\\EventListener\\ThreadPermalinkListener');
        $instance->addSubscriberService('fos_comment.listener.comment_blamer', 'FOS\\CommentBundle\\EventListener\\CommentBlamerListener');
        $instance->addSubscriberService('fos_comment.listener.vote_blamer', 'FOS\\CommentBundle\\EventListener\\VoteBlamerListener');
        $instance->addSubscriberService('fos_comment.listener.closed_threads', 'FOS\\CommentBundle\\EventListener\\ClosedThreadListener');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.dynamic', 'sonata_block' => 'sonata.block.templating.helper', 'markdown' => 'templating.helper.markdown', 'ivory_ckeditor' => 'ivory_ck_editor.templating.helper', 'locale' => 'sonata.intl.templating.helper.locale', 'number' => 'sonata.intl.templating.helper.number', 'datetime' => 'sonata.intl.templating.helper.datetime', 'jms_serializer' => 'jms_serializer.templating.helper.serializer', 'ivory_google_map' => 'ivory_google_map.template.helper', 'social-buttons' => 'nomaya.socialbarhelper', 'social-links' => 'nomaya.sociallinkshelper'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)));
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));
        $c->addEventSubscriber($this->get('sonata.easy_extends.doctrine.mapper'));
        $c->addEventSubscriber($this->get('sonata.media.doctrine.event_subscriber'));
        $c->addEventListener(array(0 => 'postGenerateSchema'), 'security.acl.dbal.schema_listener');

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'tec', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance.
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle\\Resources\\config\\doctrine') => 'Application\\Sonata\\UserBundle\\Entity', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle\\Resources\\config\\doctrine') => 'Sonata\\UserBundle\\Entity', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\doctrine') => 'FOS\\UserBundle\\Entity', ($this->targetDirs[3].'\\src\\Application\\Sonata\\ClassificationBundle\\Resources\\config\\doctrine') => 'Application\\Sonata\\ClassificationBundle\\Entity', ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\Resources\\config\\doctrine') => 'Sonata\\ClassificationBundle\\Entity', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\Resources\\config\\doctrine') => 'Sonata\\MediaBundle\\Entity', ($this->targetDirs[3].'\\src\\Application\\Sonata\\MediaBundle\\Resources\\config\\doctrine') => 'Application\\Sonata\\MediaBundle\\Entity', ($this->targetDirs[3].'\\src\\Application\\Sonata\\NewsBundle\\Resources\\config\\doctrine') => 'Application\\Sonata\\NewsBundle\\Entity', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\Resources\\config\\doctrine') => 'Sonata\\NewsBundle\\Entity', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle\\Resources\\config\\doctrine') => 'FOS\\CommentBundle\\Entity'));
        $b->setGlobalBasename('mapping');

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'\\src\\Application\\ServiceBundle\\Entity'), 1 => ($this->targetDirs[3].'\\src\\Application\\ProduitBundle\\Entity')));

        $d = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $d->addDriver($b, 'Application\\Sonata\\UserBundle\\Entity');
        $d->addDriver($b, 'Sonata\\UserBundle\\Entity');
        $d->addDriver($b, 'FOS\\UserBundle\\Entity');
        $d->addDriver($b, 'Application\\Sonata\\ClassificationBundle\\Entity');
        $d->addDriver($b, 'Sonata\\ClassificationBundle\\Entity');
        $d->addDriver($b, 'Sonata\\MediaBundle\\Entity');
        $d->addDriver($b, 'Application\\Sonata\\MediaBundle\\Entity');
        $d->addDriver($b, 'Application\\Sonata\\NewsBundle\\Entity');
        $d->addDriver($b, 'Sonata\\NewsBundle\\Entity');
        $d->addDriver($b, 'FOS\\CommentBundle\\Entity');
        $d->addDriver($c, 'Application\\ServiceBundle\\Entity');
        $d->addDriver($c, 'Application\\ProduitBundle\\Entity');

        $e = new \Doctrine\ORM\Configuration();
        $e->setEntityNamespaces(array('ApplicationSonataUserBundle' => 'Application\\Sonata\\UserBundle\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'ApplicationSonataClassificationBundle' => 'Application\\Sonata\\ClassificationBundle\\Entity', 'SonataClassificationBundle' => 'Sonata\\ClassificationBundle\\Entity', 'SonataMediaBundle' => 'Sonata\\MediaBundle\\Entity', 'ApplicationSonataMediaBundle' => 'Application\\Sonata\\MediaBundle\\Entity', 'ServiceBundle' => 'Application\\ServiceBundle\\Entity', 'ProduitBundle' => 'Application\\ProduitBundle\\Entity', 'ApplicationSonataNewsBundle' => 'Application\\Sonata\\NewsBundle\\Entity', 'SonataNewsBundle' => 'Sonata\\NewsBundle\\Entity', 'FOSCommentBundle' => 'FOS\\CommentBundle\\Entity'));
        $e->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $e->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $e->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $e->setMetadataDriverImpl($d);
        $e->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $e->setProxyNamespace('Proxies');
        $e->setAutoGenerateProxyClasses(true);
        $e->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $e->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $e->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $e->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $e->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $e);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_f3b1929b6bef2772facf4c36cebcf1b16b2ea0e4ef57f8205fbe14d75bd16674');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_f3b1929b6bef2772facf4c36cebcf1b16b2ea0e4ef57f8205fbe14d75bd16674');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_f3b1929b6bef2772facf4c36cebcf1b16b2ea0e4ef57f8205fbe14d75bd16674');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'sonata_type_immutable_array' => 'sonata.core.form.type.array', 'sonata_type_boolean' => 'sonata.core.form.type.boolean', 'sonata_type_collection' => 'sonata.core.form.type.collection', 'sonata_type_translatable_choice' => 'sonata.core.form.type.translatable_choice', 'sonata_type_date_range' => 'sonata.core.form.type.date_range', 'sonata_type_datetime_range' => 'sonata.core.form.type.datetime_range', 'sonata_type_date_picker' => 'sonata.core.form.type.date_picker', 'sonata_type_datetime_picker' => 'sonata.core.form.type.datetime_picker', 'sonata_type_date_range_picker' => 'sonata.core.form.type.date_range_picker', 'sonata_type_datetime_range_picker' => 'sonata.core.form.type.datetime_range_picker', 'sonata_type_equal' => 'sonata.core.form.type.equal', 'sonata_type_color_selector' => 'sonata.core.form.type.color_selector', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'sonata_type_container_template_choice' => 'sonata.block.form.type.container_template', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'sonata_type_model' => 'sonata.admin.form.type.model_choice', 'sonata_type_model_list' => 'sonata.admin.form.type.model_list', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'sonata_type_model_hidden' => 'sonata.admin.form.type.model_hidden', 'sonata_type_model_autocomplete' => 'sonata.admin.form.type.model_autocomplete', 'sonata_type_native_collection' => 'sonata.admin.form.type.collection', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default', 'sonata_type_filter_date' => 'sonata.admin.form.filter.type.date', 'sonata_type_filter_date_range' => 'sonata.admin.form.filter.type.daterange', 'sonata_type_filter_datetime' => 'sonata.admin.form.filter.type.datetime', 'sonata_type_filter_datetime_range' => 'sonata.admin.form.filter.type.datetime_range', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'sonata_security_roles' => 'sonata.user.form.type.security_roles', 'sonata_user_profile' => 'sonata.user.profile.form.type', 'sonata_user_gender' => 'sonata.user.form.gender_list', 'sonata_category_selector' => 'sonata.classification.form.type.category_selector', 'sonata_classification_api_form_category' => 'sonata.classification.api.form.type.category', 'sonata_classification_api_form_collection' => 'sonata.classification.api.form.type.collection', 'sonata_classification_api_form_tag' => 'sonata.classification.api.form.type.tag', 'ckeditor' => 'ivory_ck_editor.form.type', 'sonata_formatter_type' => 'sonata.formatter.form.type.selector', 'sonata_media_type' => 'sonata.media.form.type.media', 'sonata_media_api_form_doctrine_media' => 'sonata.media.api.form.type.doctrine.media', 'sonata_media_api_form_media' => 'sonata.media.api.form.type.media', 'sonata_media_api_form_gallery' => 'sonata.media.api.form.type.gallery', 'sonata_media_api_form_gallery_has_media' => 'sonata.media.api.form.type.gallery_has_media', 'sonata_post_comment' => 'sonata.news.form.type.comment', 'fos_comment_comment' => 'fos_comment.form_type.comment.default', 'fos_comment_commentable_thread' => 'fos_comment.form_type.commentable_thread.default', 'fos_comment_delete_comment' => 'fos_comment.form_type.delete_comment.default', 'fos_comment_thread' => 'fos_comment.form_type.thread.default', 'fos_comment_vote' => 'fos_comment.form_type.vote.default', 'places_autocomplete' => 'ivory_google_map.places_autocomplete.form.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'sonata.admin.form.extension.field', 5 => 'sonata.admin.form.extension.field.mopa'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance.
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler());
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_comment.form_factory.comment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\FormFactory\CommentFormFactory A FOS\CommentBundle\FormFactory\CommentFormFactory instance.
     */
    protected function getFosComment_FormFactory_CommentService()
    {
        return $this->services['fos_comment.form_factory.comment'] = new \FOS\CommentBundle\FormFactory\CommentFormFactory($this->get('form.factory'), 'fos_comment_comment', 'fos_comment_comment');
    }

    /**
     * Gets the 'fos_comment.form_factory.commentable_thread' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\FormFactory\CommentableThreadFormFactory A FOS\CommentBundle\FormFactory\CommentableThreadFormFactory instance.
     */
    protected function getFosComment_FormFactory_CommentableThreadService()
    {
        return $this->services['fos_comment.form_factory.commentable_thread'] = new \FOS\CommentBundle\FormFactory\CommentableThreadFormFactory($this->get('form.factory'), 'fos_comment_commentable_thread', 'fos_comment_commentable_thread');
    }

    /**
     * Gets the 'fos_comment.form_factory.delete_comment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\FormFactory\DeleteCommentFormFactory A FOS\CommentBundle\FormFactory\DeleteCommentFormFactory instance.
     */
    protected function getFosComment_FormFactory_DeleteCommentService()
    {
        return $this->services['fos_comment.form_factory.delete_comment'] = new \FOS\CommentBundle\FormFactory\DeleteCommentFormFactory($this->get('form.factory'), 'fos_comment_delete_comment', 'fos_comment_delete_comment');
    }

    /**
     * Gets the 'fos_comment.form_factory.thread' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\FormFactory\ThreadFormFactory A FOS\CommentBundle\FormFactory\ThreadFormFactory instance.
     */
    protected function getFosComment_FormFactory_ThreadService()
    {
        return $this->services['fos_comment.form_factory.thread'] = new \FOS\CommentBundle\FormFactory\ThreadFormFactory($this->get('form.factory'), 'fos_comment_thread', 'fos_comment_thread');
    }

    /**
     * Gets the 'fos_comment.form_factory.vote' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\FormFactory\VoteFormFactory A FOS\CommentBundle\FormFactory\VoteFormFactory instance.
     */
    protected function getFosComment_FormFactory_VoteService()
    {
        return $this->services['fos_comment.form_factory.vote'] = new \FOS\CommentBundle\FormFactory\VoteFormFactory($this->get('form.factory'), 'fos_comment_vote', 'fos_comment_vote');
    }

    /**
     * Gets the 'fos_comment.form_type.comment.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Form\CommentType A FOS\CommentBundle\Form\CommentType instance.
     */
    protected function getFosComment_FormType_Comment_DefaultService()
    {
        return $this->services['fos_comment.form_type.comment.default'] = new \FOS\CommentBundle\Form\CommentType('Application\\ServiceBundle\\Entity\\Comment');
    }

    /**
     * Gets the 'fos_comment.form_type.commentable_thread.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Form\CommentableThreadType A FOS\CommentBundle\Form\CommentableThreadType instance.
     */
    protected function getFosComment_FormType_CommentableThread_DefaultService()
    {
        return $this->services['fos_comment.form_type.commentable_thread.default'] = new \FOS\CommentBundle\Form\CommentableThreadType('Application\\ServiceBundle\\Entity\\Thread');
    }

    /**
     * Gets the 'fos_comment.form_type.delete_comment.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Form\DeleteCommentType A FOS\CommentBundle\Form\DeleteCommentType instance.
     */
    protected function getFosComment_FormType_DeleteComment_DefaultService()
    {
        return $this->services['fos_comment.form_type.delete_comment.default'] = new \FOS\CommentBundle\Form\DeleteCommentType('Application\\ServiceBundle\\Entity\\Comment');
    }

    /**
     * Gets the 'fos_comment.form_type.thread.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Form\ThreadType A FOS\CommentBundle\Form\ThreadType instance.
     */
    protected function getFosComment_FormType_Thread_DefaultService()
    {
        return $this->services['fos_comment.form_type.thread.default'] = new \FOS\CommentBundle\Form\ThreadType('Application\\ServiceBundle\\Entity\\Thread');
    }

    /**
     * Gets the 'fos_comment.form_type.vote.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Form\VoteType A FOS\CommentBundle\Form\VoteType instance.
     */
    protected function getFosComment_FormType_Vote_DefaultService()
    {
        return $this->services['fos_comment.form_type.vote.default'] = new \FOS\CommentBundle\Form\VoteType('Application\\ServiceBundle\\Entity\\Vote');
    }

    /**
     * Gets the 'fos_comment.listener.closed_threads' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\EventListener\ClosedThreadListener A FOS\CommentBundle\EventListener\ClosedThreadListener instance.
     */
    protected function getFosComment_Listener_ClosedThreadsService()
    {
        return $this->services['fos_comment.listener.closed_threads'] = new \FOS\CommentBundle\EventListener\ClosedThreadListener();
    }

    /**
     * Gets the 'fos_comment.listener.comment_blamer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\EventListener\CommentBlamerListener A FOS\CommentBundle\EventListener\CommentBlamerListener instance.
     */
    protected function getFosComment_Listener_CommentBlamerService()
    {
        return $this->services['fos_comment.listener.comment_blamer'] = new \FOS\CommentBundle\EventListener\CommentBlamerListener($this->get('security.authorization_checker'), $this->get('security.token_storage'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_comment.listener.comment_vote_score' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\EventListener\CommentVoteScoreListener A FOS\CommentBundle\EventListener\CommentVoteScoreListener instance.
     */
    protected function getFosComment_Listener_CommentVoteScoreService()
    {
        return $this->services['fos_comment.listener.comment_vote_score'] = new \FOS\CommentBundle\EventListener\CommentVoteScoreListener();
    }

    /**
     * Gets the 'fos_comment.listener.thread_counters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\EventListener\ThreadCountersListener A FOS\CommentBundle\EventListener\ThreadCountersListener instance.
     */
    protected function getFosComment_Listener_ThreadCountersService()
    {
        return $this->services['fos_comment.listener.thread_counters'] = new \FOS\CommentBundle\EventListener\ThreadCountersListener($this->get('fos_comment.manager.comment.default'));
    }

    /**
     * Gets the 'fos_comment.listener.thread_permalink' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\EventListener\ThreadPermalinkListener A FOS\CommentBundle\EventListener\ThreadPermalinkListener instance.
     */
    protected function getFosComment_Listener_ThreadPermalinkService()
    {
        return $this->services['fos_comment.listener.thread_permalink'] = new \FOS\CommentBundle\EventListener\ThreadPermalinkListener($this);
    }

    /**
     * Gets the 'fos_comment.listener.vote_blamer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\EventListener\VoteBlamerListener A FOS\CommentBundle\EventListener\VoteBlamerListener instance.
     */
    protected function getFosComment_Listener_VoteBlamerService()
    {
        return $this->services['fos_comment.listener.vote_blamer'] = new \FOS\CommentBundle\EventListener\VoteBlamerListener($this->get('security.authorization_checker'), $this->get('security.token_storage'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_comment.manager.comment.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Entity\CommentManager A FOS\CommentBundle\Entity\CommentManager instance.
     */
    protected function getFosComment_Manager_Comment_DefaultService()
    {
        return $this->services['fos_comment.manager.comment.default'] = new \FOS\CommentBundle\Entity\CommentManager($this->get('debug.event_dispatcher'), $this->get('fos_comment.sorting_factory'), $this->get('fos_comment.entity_manager'), 'Application\\ServiceBundle\\Entity\\Comment');
    }

    /**
     * Gets the 'fos_comment.manager.thread.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Entity\ThreadManager A FOS\CommentBundle\Entity\ThreadManager instance.
     */
    protected function getFosComment_Manager_Thread_DefaultService()
    {
        return $this->services['fos_comment.manager.thread.default'] = new \FOS\CommentBundle\Entity\ThreadManager($this->get('debug.event_dispatcher'), $this->get('fos_comment.entity_manager'), 'Application\\ServiceBundle\\Entity\\Thread');
    }

    /**
     * Gets the 'fos_comment.manager.vote.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Entity\VoteManager A FOS\CommentBundle\Entity\VoteManager instance.
     */
    protected function getFosComment_Manager_Vote_DefaultService()
    {
        return $this->services['fos_comment.manager.vote.default'] = new \FOS\CommentBundle\Entity\VoteManager($this->get('debug.event_dispatcher'), $this->get('fos_comment.entity_manager'), 'Application\\ServiceBundle\\Entity\\Vote');
    }

    /**
     * Gets the 'fos_comment.sorting_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\CommentBundle\Sorting\SortingFactory A FOS\CommentBundle\Sorting\SortingFactory instance.
     */
    protected function getFosComment_SortingFactoryService()
    {
        return $this->services['fos_comment.sorting_factory'] = new \FOS\CommentBundle\Sorting\SortingFactory(array('date_asc' => new \FOS\CommentBundle\Sorting\DateSorting('ASC'), 'date_desc' => new \FOS\CommentBundle\Sorting\DateSorting('DESC')), 'date_desc');
    }

    /**
     * Gets the 'fos_rest.body_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener A FOS\RestBundle\EventListener\BodyListener instance.
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.decoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder A FOS\RestBundle\Decoder\JsonDecoder instance.
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.jsontoform' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder A FOS\RestBundle\Decoder\JsonToFormDecoder instance.
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder A FOS\RestBundle\Decoder\XmlDecoder instance.
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the 'fos_rest.decoder_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider A FOS\RestBundle\Decoder\ContainerDecoderProvider instance.
     */
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.exception_format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\FormatNegotiator A FOS\RestBundle\Util\FormatNegotiator instance.
     */
    protected function getFosRest_ExceptionFormatNegotiatorService()
    {
        return $this->services['fos_rest.exception_format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }

    /**
     * Gets the 'fos_rest.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\FormatNegotiator A FOS\RestBundle\Util\FormatNegotiator instance.
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        return $this->services['fos_rest.format_negotiator'] = new \FOS\RestBundle\Util\FormatNegotiator();
    }

    /**
     * Gets the 'fos_rest.inflector.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\Inflector\DoctrineInflector A FOS\RestBundle\Util\Inflector\DoctrineInflector instance.
     */
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Util\Inflector\DoctrineInflector();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer A FOS\RestBundle\Normalizer\CamelKeysNormalizer instance.
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the 'fos_rest.normalizer.camel_keys_with_leading_underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore A FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore instance.
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher A FOS\RestBundle\Request\ParamFetcher instance.
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('fos_rest.violation_formatter'), $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_rest.request.param_fetcher.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Request\ParamReader A FOS\RestBundle\Request\ParamReader instance.
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteLoader A FOS\RestBundle\Routing\Loader\RestRouteLoader instance.
     */
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), NULL);
    }

    /**
     * Gets the 'fos_rest.routing.loader.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestRouteProcessor A FOS\RestBundle\Routing\Loader\RestRouteProcessor instance.
     */
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestActionReader A FOS\RestBundle\Routing\Loader\Reader\RestActionReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), true, array('rss' => false, 'html' => true));
    }

    /**
     * Gets the 'fos_rest.routing.loader.reader.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader A FOS\RestBundle\Routing\Loader\Reader\RestControllerReader instance.
     */
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }

    /**
     * Gets the 'fos_rest.routing.loader.xml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader A FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('rss' => false, 'html' => true), NULL);
    }

    /**
     * Gets the 'fos_rest.routing.loader.yaml_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader A FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader instance.
     */
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), true, array('rss' => false, 'html' => true), NULL);
    }

    /**
     * Gets the 'fos_rest.serializer.exception_wrapper_normalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Serializer\ExceptionWrapperNormalizer A FOS\RestBundle\Serializer\ExceptionWrapperNormalizer instance.
     */
    protected function getFosRest_Serializer_ExceptionWrapperNormalizerService()
    {
        return $this->services['fos_rest.serializer.exception_wrapper_normalizer'] = new \FOS\RestBundle\Serializer\ExceptionWrapperNormalizer($this->get('translator'));
    }

    /**
     * Gets the 'fos_rest.serializer.exception_wrapper_serialize_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler A FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler instance.
     */
    protected function getFosRest_Serializer_ExceptionWrapperSerializeHandlerService()
    {
        return $this->services['fos_rest.serializer.exception_wrapper_serialize_handler'] = new \FOS\RestBundle\Serializer\ExceptionWrapperSerializeHandler();
    }

    /**
     * Gets the 'fos_rest.view.exception_wrapper_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\View\ExceptionWrapperHandler A FOS\RestBundle\View\ExceptionWrapperHandler instance.
     */
    protected function getFosRest_View_ExceptionWrapperHandlerService()
    {
        return $this->services['fos_rest.view.exception_wrapper_handler'] = new \FOS\RestBundle\View\ExceptionWrapperHandler();
    }

    /**
     * Gets the 'fos_rest.view_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\View\ViewHandler A FOS\RestBundle\View\ViewHandler instance.
     */
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \FOS\RestBundle\View\ViewHandler(array('rss' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setExclusionStrategyGroups('');
        $instance->setExclusionStrategyVersion('');
        $instance->setSerializeNullStrategy(false);
        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'fos_rest.violation_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\RestBundle\Util\ViolationFormatter A FOS\RestBundle\Util\ViolationFormatter instance.
     */
    protected function getFosRest_ViolationFormatterService()
    {
        return $this->services['fos_rest.violation_formatter'] = new \FOS\RestBundle\Util\ViolationFormatter();
    }

    /**
     * Gets the 'fos_user.change_password.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.change_password.form.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler A FOS\UserBundle\Form\Handler\ChangePasswordFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.change_password.form.handler.default' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }

        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance.
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }

    /**
     * Gets the 'fos_user.group.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Group_FormService()
    {
        return $this->services['fos_user.group.form'] = $this->get('form.factory')->createNamed('fos_user_group_form', 'fos_user_group', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.group.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\GroupFormHandler A FOS\UserBundle\Form\Handler\GroupFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.group.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Group_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.group.form.handler', 'request');
        }

        return $this->services['fos_user.group.form.handler'] = $this->scopedServices['request']['fos_user.group.form.handler'] = new \FOS\UserBundle\Form\Handler\GroupFormHandler($this->get('fos_user.group.form'), $this->get('request'), $this->get('fos_user.group_manager'));
    }

    /**
     * Gets the 'fos_user.group.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\GroupFormType A FOS\UserBundle\Form\Type\GroupFormType instance.
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Application\\Sonata\\UserBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.group_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Entity\GroupManager A Sonata\UserBundle\Entity\GroupManager instance.
     */
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \Sonata\UserBundle\Entity\GroupManager($this->get('fos_user.entity_manager'), 'Application\\Sonata\\UserBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance.
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }

    /**
     * Gets the 'fos_user.profile.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'fos_user_profile', NULL, array('validation_groups' => array(0 => 'Authentication')));
    }

    /**
     * Gets the 'fos_user.profile.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\ProfileFormHandler A FOS\UserBundle\Form\Handler\ProfileFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.profile.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }

        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance.
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Application\\Sonata\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration_form', 'fos_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.registration.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\RegistrationFormHandler A FOS\UserBundle\Form\Handler\RegistrationFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.registration.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }

        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \FOS\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Application\\Sonata\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting_form', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }

    /**
     * Gets the 'fos_user.resetting.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Handler\ResettingFormHandler A FOS\UserBundle\Form\Handler\ResettingFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'fos_user.resetting.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }

        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance.
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\InteractiveLoginListener A FOS\UserBundle\Security\InteractiveLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance.
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Entity\UserManager A Sonata\UserBundle\Entity\UserManager instance.
     */
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.user_manager'] = new \Sonata\UserBundle\Entity\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Application\\Sonata\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance.
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance.
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance.
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true, $this->get('request_stack'));

        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        $instance->addRenderer($this->get('fragment.renderer.esi'));
        $instance->addRenderer($this->get('fragment.renderer.ssi'));

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the 'ivory_ck_editor.config_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\ConfigManager A Ivory\CKEditorBundle\Model\ConfigManager instance.
     */
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        $this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();

        $instance->setConfig('default', array('filebrowserBrowseRoute' => 'admin_app_media_media_ckeditor_browser', 'filebrowserImageBrowseRoute' => 'admin_app_media_media_ckeditor_browser', 'filebrowserImageBrowseRouteParameters' => array('provider' => 'sonata.media.provider.image', 'hide_context' => true, 'context' => 'default'), 'filebrowserUploadRoute' => 'admin_app_media_media_ckeditor_upload', 'filebrowserUploadRouteParameters' => array('provider' => 'sonata.media.provider.file', 'hide_context' => true, 'context' => 'default'), 'filebrowserImageUploadRoute' => 'admin_app_media_media_ckeditor_upload', 'filebrowserImageUploadRouteParameters' => array('provider' => 'sonata.media.provider.image', 'context' => 'default')));
        $instance->setConfig('news', array('filebrowserBrowseRoute' => 'admin_app_media_media_ckeditor_browser', 'filebrowserImageBrowseRoute' => 'admin_app_media_media_ckeditor_browser', 'filebrowserImageBrowseRouteParameters' => array('provider' => 'sonata.media.provider.image', 'hide_context' => true, 'context' => 'news'), 'filebrowserUploadRoute' => 'admin_app_media_media_ckeditor_upload', 'filebrowserUploadRouteParameters' => array('provider' => 'sonata.media.provider.file', 'context' => 'news'), 'filebrowserImageUploadRoute' => 'admin_app_media_media_ckeditor_upload', 'filebrowserImageUploadRouteParameters' => array('provider' => 'sonata.media.provider.image', 'context' => 'news')));
        $instance->setDefaultConfig('news');

        return $instance;
    }

    /**
     * Gets the 'ivory_ck_editor.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Form\Type\CKEditorType A Ivory\CKEditorBundle\Form\Type\CKEditorType instance.
     */
    protected function getIvoryCkEditor_Form_TypeService()
    {
        return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType(true, true, 'bundles/ivoryckeditor/', 'bundles/ivoryckeditor/ckeditor.js', $this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.styles_set_manager'), $this->get('ivory_ck_editor.template_manager'));
    }

    /**
     * Gets the 'ivory_ck_editor.plugin_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\PluginManager A Ivory\CKEditorBundle\Model\PluginManager instance.
     */
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }

    /**
     * Gets the 'ivory_ck_editor.styles_set_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\StylesSetManager A Ivory\CKEditorBundle\Model\StylesSetManager instance.
     */
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }

    /**
     * Gets the 'ivory_ck_editor.template_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\TemplateManager A Ivory\CKEditorBundle\Model\TemplateManager instance.
     */
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }

    /**
     * Gets the 'ivory_ck_editor.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Templating\CKEditorHelper A Ivory\CKEditorBundle\Templating\CKEditorHelper instance.
     */
    protected function getIvoryCkEditor_Templating_HelperService()
    {
        return $this->services['ivory_ck_editor.templating.helper'] = new \Ivory\CKEditorBundle\Templating\CKEditorHelper($this);
    }

    /**
     * Gets the 'ivory_ck_editor.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension A Ivory\CKEditorBundle\Twig\CKEditorExtension instance.
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension($this->get('ivory_ck_editor.templating.helper'));
    }

    /**
     * Gets the 'ivory_google_map.bound' service.
     *
     * @return \Ivory\GoogleMap\Base\Bound A Ivory\GoogleMap\Base\Bound instance.
     */
    protected function getIvoryGoogleMap_BoundService()
    {
        return $this->get('ivory_google_map.bound.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.bound.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Base\BoundBuilder A Ivory\GoogleMapBundle\Model\Base\BoundBuilder instance.
     */
    protected function getIvoryGoogleMap_Bound_BuilderService()
    {
        return $this->services['ivory_google_map.bound.builder'] = new \Ivory\GoogleMapBundle\Model\Base\BoundBuilder('Ivory\\GoogleMap\\Base\\Bound', $this->get('ivory_google_map.coordinate.builder'));
    }

    /**
     * Gets the 'ivory_google_map.business_account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Services\BusinessAccount A Ivory\GoogleMap\Services\BusinessAccount instance.
     */
    protected function getIvoryGoogleMap_BusinessAccountService()
    {
        return $this->services['ivory_google_map.business_account'] = new \Ivory\GoogleMap\Services\BusinessAccount(NULL, NULL);
    }

    /**
     * Gets the 'ivory_google_map.circle' service.
     *
     * @return \Ivory\GoogleMap\Overlays\Circle A Ivory\GoogleMap\Overlays\Circle instance.
     */
    protected function getIvoryGoogleMap_CircleService()
    {
        return $this->get('ivory_google_map.circle.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.circle.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\CircleBuilder A Ivory\GoogleMapBundle\Model\Overlays\CircleBuilder instance.
     */
    protected function getIvoryGoogleMap_Circle_BuilderService()
    {
        $this->services['ivory_google_map.circle.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\CircleBuilder('Ivory\\GoogleMap\\Overlays\\Circle', $this->get('ivory_google_map.coordinate.builder'));

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.coordinate' service.
     *
     * @return \Ivory\GoogleMap\Base\Coordinate A Ivory\GoogleMap\Base\Coordinate instance.
     */
    protected function getIvoryGoogleMap_CoordinateService()
    {
        return $this->get('ivory_google_map.coordinate.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.coordinate.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Base\CoordinateBuilder A Ivory\GoogleMapBundle\Model\Base\CoordinateBuilder instance.
     */
    protected function getIvoryGoogleMap_Coordinate_BuilderService()
    {
        return $this->services['ivory_google_map.coordinate.builder'] = new \Ivory\GoogleMapBundle\Model\Base\CoordinateBuilder('Ivory\\GoogleMap\\Base\\Coordinate');
    }

    /**
     * Gets the 'ivory_google_map.encoded_polyline' service.
     *
     * @return \Ivory\GoogleMap\Overlays\EncodedPolyline A Ivory\GoogleMap\Overlays\EncodedPolyline instance.
     */
    protected function getIvoryGoogleMap_EncodedPolylineService()
    {
        return $this->get('ivory_google_map.encoded_polyline.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.encoded_polyline.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\EncodedPolylineBuilder A Ivory\GoogleMapBundle\Model\Overlays\EncodedPolylineBuilder instance.
     */
    protected function getIvoryGoogleMap_EncodedPolyline_BuilderService()
    {
        $this->services['ivory_google_map.encoded_polyline.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\EncodedPolylineBuilder('Ivory\\GoogleMap\\Overlays\\EncodedPolyline');

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.event' service.
     *
     * @return \Ivory\GoogleMap\Events\Event A Ivory\GoogleMap\Events\Event instance.
     */
    protected function getIvoryGoogleMap_EventService()
    {
        return $this->get('ivory_google_map.event.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.event.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Events\EventBuilder A Ivory\GoogleMapBundle\Model\Events\EventBuilder instance.
     */
    protected function getIvoryGoogleMap_Event_BuilderService()
    {
        return $this->services['ivory_google_map.event.builder'] = new \Ivory\GoogleMapBundle\Model\Events\EventBuilder('Ivory\\GoogleMap\\Events\\Event');
    }

    /**
     * Gets the 'ivory_google_map.event_manager' service.
     *
     * @return \Ivory\GoogleMap\Events\EventManager A Ivory\GoogleMap\Events\EventManager instance.
     */
    protected function getIvoryGoogleMap_EventManagerService()
    {
        return $this->get('ivory_google_map.event_manager.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.event_manager.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Events\EventManagerBuilder A Ivory\GoogleMapBundle\Model\Events\EventManagerBuilder instance.
     */
    protected function getIvoryGoogleMap_EventManager_BuilderService()
    {
        return $this->services['ivory_google_map.event_manager.builder'] = new \Ivory\GoogleMapBundle\Model\Events\EventManagerBuilder('Ivory\\GoogleMap\\Events\\EventManager');
    }

    /**
     * Gets the 'ivory_google_map.ground_overlay' service.
     *
     * @return \Ivory\GoogleMap\Overlays\GroundOverlay A Ivory\GoogleMap\Overlays\GroundOverlay instance.
     */
    protected function getIvoryGoogleMap_GroundOverlayService()
    {
        return $this->get('ivory_google_map.ground_overlay.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.ground_overlay.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\GroundOverlayBuilder A Ivory\GoogleMapBundle\Model\Overlays\GroundOverlayBuilder instance.
     */
    protected function getIvoryGoogleMap_GroundOverlay_BuilderService()
    {
        $this->services['ivory_google_map.ground_overlay.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\GroundOverlayBuilder('Ivory\\GoogleMap\\Overlays\\GroundOverlay', $this->get('ivory_google_map.bound.builder'));

        $instance->setUrl('');
        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.helper.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\MapHelper A Ivory\GoogleMap\Helper\MapHelper instance.
     */
    protected function getIvoryGoogleMap_Helper_MapService()
    {
        $a = new \Ivory\GoogleMap\Helper\MapTypeIdHelper();

        $b = new \Ivory\GoogleMap\Helper\Controls\ControlPositionHelper();

        $c = new \Ivory\GoogleMap\Helper\Overlays\AnimationHelper();

        $d = new \Ivory\GoogleMap\Helper\Overlays\MarkerHelper($c);

        $e = new \Ivory\GoogleMap\Helper\Overlays\InfoWindowHelper();

        $f = new \Ivory\GoogleMap\Helper\Overlays\MarkerCluster\DefaultMarkerClusterHelper($d, $e);

        $g = new \Ivory\GoogleMap\Helper\Overlays\MarkerCluster\JsMarkerClusterHelper($d, $e);

        $h = new \Ivory\GoogleMap\Helper\Overlays\MarkerCluster\MarkerClusterHelper(array('default' => $f, 'marker_cluster' => $g));

        return $this->services['ivory_google_map.helper.map'] = new \Ivory\GoogleMap\Helper\MapHelper($this->get('ivory_google_map.helper.coordinate'), $this->get('ivory_google_map.helper.bound'), new \Ivory\GoogleMap\Helper\Base\PointHelper(), new \Ivory\GoogleMap\Helper\Base\SizeHelper(), $a, new \Ivory\GoogleMap\Helper\Controls\MapTypeControlHelper($a, $b, new \Ivory\GoogleMap\Helper\Controls\MapTypeControlStyleHelper()), new \Ivory\GoogleMap\Helper\Controls\OverviewMapControlHelper(), new \Ivory\GoogleMap\Helper\Controls\PanControlHelper($b), new \Ivory\GoogleMap\Helper\Controls\RotateControlHelper($b), new \Ivory\GoogleMap\Helper\Controls\ScaleControlHelper($b, new \Ivory\GoogleMap\Helper\Controls\ScaleControlStyleHelper()), new \Ivory\GoogleMap\Helper\Controls\StreetViewControlHelper($b), new \Ivory\GoogleMap\Helper\Controls\ZoomControlHelper($b, new \Ivory\GoogleMap\Helper\Controls\ZoomControlStyleHelper()), $h, new \Ivory\GoogleMap\Helper\Overlays\MarkerImageHelper(), new \Ivory\GoogleMap\Helper\Overlays\MarkerShapeHelper(), $e, new \Ivory\GoogleMap\Helper\Overlays\PolylineHelper(), new \Ivory\GoogleMap\Helper\Overlays\EncodedPolylineHelper(new \Ivory\GoogleMap\Helper\Geometry\EncodingHelper()), new \Ivory\GoogleMap\Helper\Overlays\PolygonHelper(), new \Ivory\GoogleMap\Helper\Overlays\RectangleHelper(), new \Ivory\GoogleMap\Helper\Overlays\CircleHelper(), new \Ivory\GoogleMap\Helper\Overlays\GroundOverlayHelper(), new \Ivory\GoogleMap\Helper\Layers\KMLLayerHelper(), new \Ivory\GoogleMap\Helper\Events\EventManagerHelper(), array('core' => new \Ivory\GoogleMap\Helper\Extension\CoreExtensionHelper($this->get('ivory_google_map.helper.api'), $h)));
    }

    /**
     * Gets the 'ivory_google_map.info_window' service.
     *
     * @return \Ivory\GoogleMap\Overlays\InfoWindow A Ivory\GoogleMap\Overlays\InfoWindow instance.
     */
    protected function getIvoryGoogleMap_InfoWindowService()
    {
        return $this->get('ivory_google_map.info_window.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.info_window.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\InfoWindowBuilder A Ivory\GoogleMapBundle\Model\Overlays\InfoWindowBuilder instance.
     */
    protected function getIvoryGoogleMap_InfoWindow_BuilderService()
    {
        $this->services['ivory_google_map.info_window.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\InfoWindowBuilder('Ivory\\GoogleMap\\Overlays\\InfoWindow', $this->get('ivory_google_map.coordinate.builder'), $this->get('ivory_google_map.size.builder'));

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.kml_layer' service.
     *
     * @return \Ivory\GoogleMap\Layers\KMLLayer A Ivory\GoogleMap\Layers\KMLLayer instance.
     */
    protected function getIvoryGoogleMap_KmlLayerService()
    {
        return $this->get('ivory_google_map.kml_layer.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.kml_layer.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Layers\KMLLayerBuilder A Ivory\GoogleMapBundle\Model\Layers\KMLLayerBuilder instance.
     */
    protected function getIvoryGoogleMap_KmlLayer_BuilderService()
    {
        $this->services['ivory_google_map.kml_layer.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Layers\KMLLayerBuilder('Ivory\\GoogleMap\\Layers\\KMLLayer');

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.map' service.
     *
     * @return \Ivory\GoogleMap\Map A Ivory\GoogleMap\Map instance.
     */
    protected function getIvoryGoogleMap_MapService()
    {
        return $this->get('ivory_google_map.map.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.map.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\MapBuilder A Ivory\GoogleMapBundle\Model\MapBuilder instance.
     */
    protected function getIvoryGoogleMap_Map_BuilderService()
    {
        $this->services['ivory_google_map.map.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\MapBuilder('Ivory\\GoogleMap\\Map', $this->get('ivory_google_map.coordinate.builder'), $this->get('ivory_google_map.bound.builder'));

        $instance->setLibraries(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.map_type_control' service.
     *
     * @return \Ivory\GoogleMap\Controls\MapTypeControl A Ivory\GoogleMap\Controls\MapTypeControl instance.
     */
    protected function getIvoryGoogleMap_MapTypeControlService()
    {
        return $this->get('ivory_google_map.map_type_control.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.map_type_control.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Controls\MapTypeControlBuilder A Ivory\GoogleMapBundle\Model\Controls\MapTypeControlBuilder instance.
     */
    protected function getIvoryGoogleMap_MapTypeControl_BuilderService()
    {
        $this->services['ivory_google_map.map_type_control.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Controls\MapTypeControlBuilder('Ivory\\GoogleMap\\Controls\\MapTypeControl');

        $instance->setMapTypeIds(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.marker' service.
     *
     * @return \Ivory\GoogleMap\Overlays\Marker A Ivory\GoogleMap\Overlays\Marker instance.
     */
    protected function getIvoryGoogleMap_MarkerService()
    {
        return $this->get('ivory_google_map.marker.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.marker.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\MarkerBuilder A Ivory\GoogleMapBundle\Model\Overlays\MarkerBuilder instance.
     */
    protected function getIvoryGoogleMap_Marker_BuilderService()
    {
        $this->services['ivory_google_map.marker.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerBuilder('Ivory\\GoogleMap\\Overlays\\Marker', $this->get('ivory_google_map.coordinate.builder'));

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.marker_cluster' service.
     *
     * @return \Ivory\GoogleMap\Overlays\MarkerCluster A Ivory\GoogleMap\Overlays\MarkerCluster instance.
     */
    protected function getIvoryGoogleMap_MarkerClusterService()
    {
        return $this->get('ivory_google_map.marker_cluster.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.marker_cluster.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\MarkerClusterBuilder A Ivory\GoogleMapBundle\Model\Overlays\MarkerClusterBuilder instance.
     */
    protected function getIvoryGoogleMap_MarkerCluster_BuilderService()
    {
        $this->services['ivory_google_map.marker_cluster.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerClusterBuilder('Ivory\\GoogleMap\\Overlays\\MarkerCluster');

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.marker_image' service.
     *
     * @return \Ivory\GoogleMap\Overlays\MarkerImage A Ivory\GoogleMap\Overlays\MarkerImage instance.
     */
    protected function getIvoryGoogleMap_MarkerImageService()
    {
        return $this->get('ivory_google_map.marker_image.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.marker_image.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\MarkerImageBuilder A Ivory\GoogleMapBundle\Model\Overlays\MarkerImageBuilder instance.
     */
    protected function getIvoryGoogleMap_MarkerImage_BuilderService()
    {
        return $this->services['ivory_google_map.marker_image.builder'] = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerImageBuilder('Ivory\\GoogleMap\\Overlays\\MarkerImage', $this->get('ivory_google_map.point.builder'), $this->get('ivory_google_map.size.builder'));
    }

    /**
     * Gets the 'ivory_google_map.marker_shape' service.
     *
     * @return \Ivory\GoogleMap\Overlays\MarkerShape A Ivory\GoogleMap\Overlays\MarkerShape instance.
     */
    protected function getIvoryGoogleMap_MarkerShapeService()
    {
        return $this->get('ivory_google_map.marker_shape.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.marker_shape.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\MarkerShapeBuilder A Ivory\GoogleMapBundle\Model\Overlays\MarkerShapeBuilder instance.
     */
    protected function getIvoryGoogleMap_MarkerShape_BuilderService()
    {
        $this->services['ivory_google_map.marker_shape.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerShapeBuilder('Ivory\\GoogleMap\\Overlays\\MarkerShape');

        $instance->setType('poly');
        $instance->setCoordinates(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.overview_map_control' service.
     *
     * @return \Ivory\GoogleMap\Controls\OverviewMapControl A Ivory\GoogleMap\Controls\OverviewMapControl instance.
     */
    protected function getIvoryGoogleMap_OverviewMapControlService()
    {
        return $this->get('ivory_google_map.overview_map_control.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.overview_map_control.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Controls\OverviewMapControlBuilder A Ivory\GoogleMapBundle\Model\Controls\OverviewMapControlBuilder instance.
     */
    protected function getIvoryGoogleMap_OverviewMapControl_BuilderService()
    {
        return $this->services['ivory_google_map.overview_map_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\OverviewMapControlBuilder('Ivory\\GoogleMap\\Controls\\OverviewMapControl');
    }

    /**
     * Gets the 'ivory_google_map.pan_control' service.
     *
     * @return \Ivory\GoogleMap\Controls\PanControl A Ivory\GoogleMap\Controls\PanControl instance.
     */
    protected function getIvoryGoogleMap_PanControlService()
    {
        return $this->get('ivory_google_map.pan_control.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.pan_control.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Controls\PanControlBuilder A Ivory\GoogleMapBundle\Model\Controls\PanControlBuilder instance.
     */
    protected function getIvoryGoogleMap_PanControl_BuilderService()
    {
        return $this->services['ivory_google_map.pan_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\PanControlBuilder('Ivory\\GoogleMap\\Controls\\PanControl');
    }

    /**
     * Gets the 'ivory_google_map.places_autocomplete.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Form\Type\PlacesAutocompleteType A Ivory\GoogleMapBundle\Form\Type\PlacesAutocompleteType instance.
     * 
     * @throws InactiveScopeException when the 'ivory_google_map.places_autocomplete.form.type' service is requested while the 'request' scope is not active
     */
    protected function getIvoryGoogleMap_PlacesAutocomplete_Form_TypeService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ivory_google_map.places_autocomplete.form.type', 'request');
        }

        return $this->services['ivory_google_map.places_autocomplete.form.type'] = $this->scopedServices['request']['ivory_google_map.places_autocomplete.form.type'] = new \Ivory\GoogleMapBundle\Form\Type\PlacesAutocompleteType($this->get('ivory_google_map.places_autocomplete.helper'), $this->get('request'));
    }

    /**
     * Gets the 'ivory_google_map.point' service.
     *
     * @return \Ivory\GoogleMap\Base\Point A Ivory\GoogleMap\Base\Point instance.
     */
    protected function getIvoryGoogleMap_PointService()
    {
        return $this->get('ivory_google_map.point.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.point.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Base\PointBuilder A Ivory\GoogleMapBundle\Model\Base\PointBuilder instance.
     */
    protected function getIvoryGoogleMap_Point_BuilderService()
    {
        return $this->services['ivory_google_map.point.builder'] = new \Ivory\GoogleMapBundle\Model\Base\PointBuilder('Ivory\\GoogleMap\\Base\\Point');
    }

    /**
     * Gets the 'ivory_google_map.polygon' service.
     *
     * @return \Ivory\GoogleMap\Overlays\Polygon A Ivory\GoogleMap\Overlays\Polygon instance.
     */
    protected function getIvoryGoogleMap_PolygonService()
    {
        return $this->get('ivory_google_map.polygon.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.polygon.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\PolygonBuilder A Ivory\GoogleMapBundle\Model\Overlays\PolygonBuilder instance.
     */
    protected function getIvoryGoogleMap_Polygon_BuilderService()
    {
        $this->services['ivory_google_map.polygon.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\PolygonBuilder('Ivory\\GoogleMap\\Overlays\\Polygon');

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.polyline' service.
     *
     * @return \Ivory\GoogleMap\Overlays\Polyline A Ivory\GoogleMap\Overlays\Polyline instance.
     */
    protected function getIvoryGoogleMap_PolylineService()
    {
        return $this->get('ivory_google_map.polyline.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.polyline.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\PolylineBuilder A Ivory\GoogleMapBundle\Model\Overlays\PolylineBuilder instance.
     */
    protected function getIvoryGoogleMap_Polyline_BuilderService()
    {
        $this->services['ivory_google_map.polyline.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\PolylineBuilder('Ivory\\GoogleMap\\Overlays\\Polyline');

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.rectangle' service.
     *
     * @return \Ivory\GoogleMap\Overlays\Rectangle A Ivory\GoogleMap\Overlays\Rectangle instance.
     */
    protected function getIvoryGoogleMap_RectangleService()
    {
        return $this->get('ivory_google_map.rectangle.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.rectangle.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Overlays\RectangleBuilder A Ivory\GoogleMapBundle\Model\Overlays\RectangleBuilder instance.
     */
    protected function getIvoryGoogleMap_Rectangle_BuilderService()
    {
        $this->services['ivory_google_map.rectangle.builder'] = $instance = new \Ivory\GoogleMapBundle\Model\Overlays\RectangleBuilder('Ivory\\GoogleMap\\Overlays\\Rectangle', $this->get('ivory_google_map.bound.builder'));

        $instance->setOptions(array());

        return $instance;
    }

    /**
     * Gets the 'ivory_google_map.rotate_control' service.
     *
     * @return \Ivory\GoogleMap\Controls\RotateControl A Ivory\GoogleMap\Controls\RotateControl instance.
     */
    protected function getIvoryGoogleMap_RotateControlService()
    {
        return $this->get('ivory_google_map.rotate_control.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.rotate_control.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Controls\RotateControlBuilder A Ivory\GoogleMapBundle\Model\Controls\RotateControlBuilder instance.
     */
    protected function getIvoryGoogleMap_RotateControl_BuilderService()
    {
        return $this->services['ivory_google_map.rotate_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\RotateControlBuilder('Ivory\\GoogleMap\\Controls\\RotateControl');
    }

    /**
     * Gets the 'ivory_google_map.scale_control' service.
     *
     * @return \Ivory\GoogleMap\Controls\ScaleControl A Ivory\GoogleMap\Controls\ScaleControl instance.
     */
    protected function getIvoryGoogleMap_ScaleControlService()
    {
        return $this->get('ivory_google_map.scale_control.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.scale_control.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Controls\ScaleControlBuilder A Ivory\GoogleMapBundle\Model\Controls\ScaleControlBuilder instance.
     */
    protected function getIvoryGoogleMap_ScaleControl_BuilderService()
    {
        return $this->services['ivory_google_map.scale_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\ScaleControlBuilder('Ivory\\GoogleMap\\Controls\\ScaleControl');
    }

    /**
     * Gets the 'ivory_google_map.size' service.
     *
     * @return \Ivory\GoogleMap\Base\Size A Ivory\GoogleMap\Base\Size instance.
     */
    protected function getIvoryGoogleMap_SizeService()
    {
        return $this->get('ivory_google_map.size.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.size.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Base\SizeBuilder A Ivory\GoogleMapBundle\Model\Base\SizeBuilder instance.
     */
    protected function getIvoryGoogleMap_Size_BuilderService()
    {
        return $this->services['ivory_google_map.size.builder'] = new \Ivory\GoogleMapBundle\Model\Base\SizeBuilder('Ivory\\GoogleMap\\Base\\Size');
    }

    /**
     * Gets the 'ivory_google_map.street_view_control' service.
     *
     * @return \Ivory\GoogleMap\Controls\StreetViewControl A Ivory\GoogleMap\Controls\StreetViewControl instance.
     */
    protected function getIvoryGoogleMap_StreetViewControlService()
    {
        return $this->get('ivory_google_map.street_view_control.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.street_view_control.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Controls\StreetViewControlBuilder A Ivory\GoogleMapBundle\Model\Controls\StreetViewControlBuilder instance.
     */
    protected function getIvoryGoogleMap_StreetViewControl_BuilderService()
    {
        return $this->services['ivory_google_map.street_view_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\StreetViewControlBuilder('Ivory\\GoogleMap\\Controls\\StreetViewControl');
    }

    /**
     * Gets the 'ivory_google_map.template.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Helper\TemplateHelper A Ivory\GoogleMapBundle\Helper\TemplateHelper instance.
     */
    protected function getIvoryGoogleMap_Template_HelperService()
    {
        return $this->services['ivory_google_map.template.helper'] = new \Ivory\GoogleMapBundle\Helper\TemplateHelper($this->get('ivory_google_map.helper.map'));
    }

    /**
     * Gets the 'ivory_google_map.zoom_control' service.
     *
     * @return \Ivory\GoogleMap\Controls\ZoomControl A Ivory\GoogleMap\Controls\ZoomControl instance.
     */
    protected function getIvoryGoogleMap_ZoomControlService()
    {
        return $this->get('ivory_google_map.zoom_control.builder')->build();
    }

    /**
     * Gets the 'ivory_google_map.zoom_control.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Model\Controls\ZoomControlBuilder A Ivory\GoogleMapBundle\Model\Controls\ZoomControlBuilder instance.
     */
    protected function getIvoryGoogleMap_ZoomControl_BuilderService()
    {
        return $this->services['ivory_google_map.zoom_control.builder'] = new \Ivory\GoogleMapBundle\Model\Controls\ZoomControlBuilder('Ivory\\GoogleMap\\Controls\\ZoomControl');
    }

    /**
     * Gets the 'jms_serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Serializer A JMS\Serializer\Serializer instance.
     */
    protected function getJmsSerializerService()
    {
        $a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $a->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($this->get('jms_serializer.metadata_factory'), $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $a);
    }

    /**
     * Gets the 'jms_serializer.array_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler A JMS\Serializer\Handler\ArrayCollectionHandler instance.
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.constraint_violation_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler A JMS\Serializer\Handler\ConstraintViolationHandler instance.
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the 'jms_serializer.datetime_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\DateHandler A JMS\Serializer\Handler\DateHandler instance.
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sO', 'UTC', true);
    }

    /**
     * Gets the 'jms_serializer.doctrine_proxy_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber A JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber instance.
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }

    /**
     * Gets the 'jms_serializer.form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\FormErrorHandler A JMS\Serializer\Handler\FormErrorHandler instance.
     */
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator'));
    }

    /**
     * Gets the 'jms_serializer.handler_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry A JMS\Serializer\Handler\LazyHandlerRegistry instance.
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(1 => array('sonata_classification_category_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'serializeObjectToId')), 'sonata_classification_collection_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'serializeObjectToId')), 'sonata_classification_tag_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'serializeObjectToId')), 'sonata_media_media_id' => array('json' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'serializeObjectToId')), 'sonata_media_gallery_id' => array('json' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'serializeObjectToId')), 'FOS\\RestBundle\\Util\\ExceptionWrapper' => array('json' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToJson'), 'xml' => array(0 => 'fos_rest.serializer.exception_wrapper_serialize_handler', 1 => 'serializeToXml')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml'))), 2 => array('sonata_classification_category_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.category', 1 => 'deserializeObjectFromId')), 'sonata_classification_collection_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.collection', 1 => 'deserializeObjectFromId')), 'sonata_classification_tag_id' => array('json' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.classification.serializer.handler.tag', 1 => 'deserializeObjectFromId')), 'sonata_media_media_id' => array('json' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.media.serializer.handler.media', 1 => 'deserializeObjectFromId')), 'sonata_media_gallery_id' => array('json' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.media.serializer.handler.gallery', 1 => 'deserializeObjectFromId')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')))));
    }

    /**
     * Gets the 'jms_serializer.json_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor A JMS\Serializer\JsonDeserializationVisitor instance.
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.json_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor A JMS\Serializer\JsonSerializationVisitor instance.
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver A JMS\Serializer\Metadata\Driver\DoctrineTypeDriver instance.
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/config/serializer'), 'Symfony\\Bundle\\AsseticBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\assetic-bundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/config/serializer'), 'Sensio\\Bundle\\FrameworkExtraBundle' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle/Resources/config/serializer'), 'AppBundle' => ($this->targetDirs[3].'\\src\\AppBundle/Resources/config/serializer'), 'Sonata\\CoreBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/config/serializer'), 'Sonata\\BlockBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle/Resources/config/serializer'), 'Knp\\Bundle\\MenuBundle' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu-bundle\\Knp\\Bundle\\MenuBundle/Resources/config/serializer'), 'Sonata\\DoctrineORMAdminBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/config/serializer'), 'Sonata\\AdminBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/config/serializer'), 'FOS\\UserBundle' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/config/serializer'), 'Sonata\\UserBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/config/serializer'), 'Sonata\\EasyExtendsBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\easy-extends-bundle/Resources/config/serializer'), 'Application\\Sonata\\UserBundle' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle/Resources/config/serializer'), 'Sonata\\ClassificationBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle/Resources/config/serializer'), 'Application\\Sonata\\ClassificationBundle' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\ClassificationBundle/Resources/config/serializer'), 'Sonata\\MarkItUpBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\markitup-bundle\\Sonata\\MarkItUpBundle/Resources/config/serializer'), 'Knp\\Bundle\\MarkdownBundle' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-markdown-bundle\\Knp\\Bundle\\MarkdownBundle/Resources/config/serializer'), 'Ivory\\CKEditorBundle' => ($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle/Resources/config/serializer'), 'Sonata\\FormatterBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/config/serializer'), 'Sonata\\MediaBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/config/serializer'), 'Application\\Sonata\\MediaBundle' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\MediaBundle/Resources/config/serializer'), 'Sonata\\IntlBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle/Resources/config/serializer'), 'Sonata\\NewsBundle' => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/config/serializer'), 'Application\\Sonata\\NewsBundle' => ($this->targetDirs[3].'\\src\\Application\\Sonata\\NewsBundle/Resources/config/serializer'), 'Application\\ServiceBundle' => ($this->targetDirs[3].'\\src\\Application\\ServiceBundle/Resources/config/serializer'), 'Application\\ProduitBundle' => ($this->targetDirs[3].'\\src\\Application\\ProduitBundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\FOS\\RestBundle/Resources/config/serializer'), 'FOS\\CommentBundle' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[3].'\\vendor\\jms\\serializer-bundle\\JMS\\SerializerBundle/Resources/config/serializer'), 'Application\\MailBundle' => ($this->targetDirs[3].'\\src\\Application\\MailBundle/Resources/config/serializer'), 'Application\\EcommerceBundle' => ($this->targetDirs[3].'\\src\\Application\\EcommerceBundle/Resources/config/serializer'), 'Ivory\\GoogleMapBundle' => ($this->targetDirs[3].'\\vendor\\egeloen\\google-map-bundle/Resources/config/serializer'), 'Nomaya\\SocialBundle' => ($this->targetDirs[3].'\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/config/serializer'), 'Liuggio\\StatsDClientBundle' => ($this->targetDirs[3].'\\vendor\\liuggio\\statsd-client-bundle\\Liuggio\\StatsDClientBundle/Resources/config/serializer'), 'Symfony\\Bundle\\DebugBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/config/serializer'), 'Acme\\DemoBundle' => ($this->targetDirs[3].'\\src\\Acme\\DemoBundle/Resources/config/serializer'), 'Symfony\\Bundle\\WebProfilerBundle' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/config/serializer'), 'Sensio\\Bundle\\DistributionBundle' => ($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/config/serializer'), 'Sensio\\Bundle\\GeneratorBundle' => ($this->targetDirs[3].'\\vendor\\sensio\\generator-bundle\\Sensio\\Bundle\\GeneratorBundle/Resources/config/serializer')));

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }

    /**
     * Gets the 'jms_serializer.naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy A JMS\Serializer\Naming\CacheNamingStrategy instance.
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
    }

    /**
     * Gets the 'jms_serializer.object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor A JMS\Serializer\Construction\DoctrineObjectConstructor instance.
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), $this->get('jms_serializer.unserialize_object_constructor'));
    }

    /**
     * Gets the 'jms_serializer.php_collection_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler A JMS\Serializer\Handler\PhpCollectionHandler instance.
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the 'jms_serializer.stopwatch_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber A JMS\SerializerBundle\Serializer\StopwatchEventSubscriber instance.
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber($this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'jms_serializer.templating.helper.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper A JMS\SerializerBundle\Templating\SerializerHelper instance.
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /**
     * Gets the 'jms_serializer.xml_deserialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor A JMS\Serializer\XmlDeserializationVisitor instance.
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.xml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor A JMS\Serializer\XmlSerializationVisitor instance.
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'jms_serializer.yaml_serialization_visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor A JMS\Serializer\YamlSerializationVisitor instance.
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Silex\RouterAwareFactory A Knp\Menu\Silex\RouterAwareFactory instance.
     */
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance.
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance.
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance.
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance.
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'liuggio_stats_d.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liuggio\StatsdClient\Service\StatsdService A Liuggio\StatsdClient\Service\StatsdService instance.
     */
    protected function getLiuggioStatsD_ServiceService()
    {
        return $this->services['liuggio_stats_d.service'] = new \Liuggio\StatsdClient\Service\StatsdService($this->get('liuggio_stats_d_client.service'), $this->get('liuggio_stats_d_client.factory'));
    }

    /**
     * Gets the 'liuggio_stats_d_client.collector.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liuggio\StatsDClientBundle\Service\StatsDCollectorService A Liuggio\StatsDClientBundle\Service\StatsDCollectorService instance.
     */
    protected function getLiuggioStatsDClient_Collector_ServiceService()
    {
        return $this->services['liuggio_stats_d_client.collector.service'] = new \Liuggio\StatsDClientBundle\Service\StatsDCollectorService($this->get('liuggio_stats_d_client.service'));
    }

    /**
     * Gets the 'liuggio_stats_d_client.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liuggio\StatsdClient\Factory\StatsdDataFactory A Liuggio\StatsdClient\Factory\StatsdDataFactory instance.
     */
    protected function getLiuggioStatsDClient_FactoryService()
    {
        return $this->services['liuggio_stats_d_client.factory'] = new \Liuggio\StatsdClient\Factory\StatsdDataFactory('Liuggio\\StatsdClient\\Entity\\StatsdData');
    }

    /**
     * Gets the 'liuggio_stats_d_client.sender.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liuggio\StatsdClient\Sender\SysLogSender A Liuggio\StatsdClient\Sender\SysLogSender instance.
     */
    protected function getLiuggioStatsDClient_Sender_ServiceService()
    {
        return $this->services['liuggio_stats_d_client.sender.service'] = new \Liuggio\StatsdClient\Sender\SysLogSender();
    }

    /**
     * Gets the 'liuggio_stats_d_client.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liuggio\StatsdClient\StatsdClient A Liuggio\StatsdClient\StatsdClient instance.
     */
    protected function getLiuggioStatsDClient_ServiceService()
    {
        return $this->services['liuggio_stats_d_client.service'] = new \Liuggio\StatsdClient\StatsdClient($this->get('liuggio_stats_d_client.sender.service'), true, true);
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'markdown.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MarkdownBundle\Parser\Preset\Max A Knp\Bundle\MarkdownBundle\Parser\Preset\Max instance.
     */
    protected function getMarkdown_ParserService()
    {
        return $this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Max();
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(2 => 200, 3 => 100, 1 => 300, 4 => 100));
    }

    /**
     * Gets the 'monolog.handler.console_very_verbose' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleVeryVerboseService()
    {
        return $this->services['monolog.handler.console_very_verbose'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array(2 => 250, 3 => 250, 4 => 100, 1 => 300));
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console_very_verbose'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'nomaya.socialbarhelper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Helpers\SocialBarHelper A Nomaya\SocialBundle\Helpers\SocialBarHelper instance.
     */
    protected function getNomaya_SocialbarhelperService()
    {
        return $this->services['nomaya.socialbarhelper'] = new \Nomaya\SocialBundle\Helpers\SocialBarHelper($this->get('templating'));
    }

    /**
     * Gets the 'nomaya.sociallinkshelper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Helpers\SocialLinksHelper A Nomaya\SocialBundle\Helpers\SocialLinksHelper instance.
     */
    protected function getNomaya_SociallinkshelperService()
    {
        return $this->services['nomaya.sociallinkshelper'] = new \Nomaya\SocialBundle\Helpers\SocialLinksHelper($this->get('templating'));
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.form'));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector($this->get('sonata.block.templating.helper'), array(0 => 'sonata.block.service.container', 1 => 'sonata.page.block.container', 2 => 'cmf.block.container', 3 => 'cmf.block.slideshow')));
        $instance->add($this->get('data_collector.dump'));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false, $this->get('request_stack'));
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('sonata.admin.route_loader'));
        $d->addLoader($this->get('fos_rest.routing.loader.controller'));
        $d->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $d->addLoader($this->get('fos_rest.routing.loader.xml_collection'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.acl.dbal.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\Schema A Symfony\Component\Security\Acl\Dbal\Schema instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaService()
    {
        return $this->services['security.acl.dbal.schema'] = new \Symfony\Component\Security\Acl\Dbal\Schema(array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), $this->get('doctrine.dbal.default_connection'));
    }

    /**
     * Gets the 'security.acl.dbal.schema_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener A Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaListenerService()
    {
        return $this->services['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener($this->get('security.acl.dbal.schema'));
    }

    /**
     * Gets the 'security.acl.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\MutableAclProvider A Symfony\Component\Security\Acl\Dbal\MutableAclProvider instance.
     */
    protected function getSecurity_Acl_ProviderService()
    {
        return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider($this->get('doctrine.dbal.default_connection'), new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), NULL);
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance.
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance.
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.admin' => new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('.*'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('security.context');
        $c = $this->get('http_kernel');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('security.authentication.manager');

        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/admin/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));

        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array());
        $g->setOptions(array('login_path' => '/admin/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $g->setProviderKey('admin');

        $h = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($c, $a, array(), $d);
        $h->setOptions(array('login_path' => '/admin/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $e, $this->get('security.authentication.session_strategy'), $a, 'admin', $g, $h, array('use_forward' => false, 'check_path' => '/admin/login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $d, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '574f1c216b39c5.10212588', $d, $e), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $a, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($c, $a, '/admin/login', false), NULL, NULL, $d));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('security.context');
        $c = $this->get('http_kernel');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('security.authentication.manager');

        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));

        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array());
        $g->setOptions(array('login_path' => '/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $g->setProviderKey('main');

        $h = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($c, $a, array(), $d);
        $h->setOptions(array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $e, $this->get('security.authentication.session_strategy'), $a, 'main', $g, $h, array('use_forward' => false, 'check_path' => '/login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $d, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '574f1c216b39c5.10212588', $d, $e), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $a, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($c, $a, '/login', false), NULL, NULL, $d));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance.
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance.
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance.
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance.
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        $this->services['sensio_distribution.webconfigurator'] = $instance = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator($this->targetDirs[2]);

        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\DoctrineStep(), 10);
        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\SecretStep(), 0);

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance.
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'sonata.admin.audit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Model\AuditManager A Sonata\AdminBundle\Model\AuditManager instance.
     */
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }

    /**
     * Gets the 'sonata.admin.block.admin_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminListBlockService A Sonata\AdminBundle\Block\AdminListBlockService instance.
     */
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.block.search_result' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Block\AdminSearchBlockService A Sonata\AdminBundle\Block\AdminSearchBlockService instance.
     */
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }

    /**
     * Gets the 'sonata.admin.builder.filter.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Filter\FilterFactory A Sonata\AdminBundle\Filter\FilterFactory instance.
     */
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder A Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder instance.
     */
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }

    /**
     * Gets the 'sonata.admin.builder.orm_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\FormContractor A Sonata\DoctrineORMAdminBundle\Builder\FormContractor instance.
     */
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder A Sonata\DoctrineORMAdminBundle\Builder\ListBuilder instance.
     */
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataIntlBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataIntlBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'bigint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'integer' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'decimal' => 'SonataIntlBundle:CRUD:list_decimal.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataIntlBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataIntlBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:list_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.builder.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder A Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder instance.
     */
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataIntlBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataIntlBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'bigint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'integer' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'decimal' => 'SonataIntlBundle:CRUD:show_decimal.html.twig', 'currency' => 'SonataIntlBundle:CRUD:show_currency.html.twig', 'percent' => 'SonataIntlBundle:CRUD:show_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig', 'html' => 'SonataAdminBundle:CRUD:show_html.html.twig'));
    }

    /**
     * Gets the 'sonata.admin.controller.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Controller\HelperController A Sonata\AdminBundle\Controller\HelperController instance.
     */
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'), $this->get('validator'));
    }

    /**
     * Gets the 'sonata.admin.event.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Event\AdminEventExtension A Sonata\AdminBundle\Event\AdminEventExtension instance.
     */
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.admin.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Export\Exporter A Sonata\AdminBundle\Export\Exporter instance.
     */
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }

    /**
     * Gets the 'sonata.admin.form.extension.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension instance.
     */
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => '', 'textarea' => '', 'text' => '', 'choice' => '', 'integer' => '', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date'));
    }

    /**
     * Gets the 'sonata.admin.form.extension.field.mopa' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension A Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension instance.
     */
    protected function getSonata_Admin_Form_Extension_Field_MopaService()
    {
        return $this->services['sonata.admin.form.extension.field.mopa'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\MopaCompatibilityTypeFieldExtension();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\ChoiceType A Sonata\AdminBundle\Form\Type\Filter\ChoiceType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateType A Sonata\AdminBundle\Form\Type\Filter\DateType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.daterange' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateRangeType A Sonata\AdminBundle\Form\Type\Filter\DateRangeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType A Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\DefaultType A Sonata\AdminBundle\Form\Type\Filter\DefaultType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }

    /**
     * Gets the 'sonata.admin.form.filter.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\Filter\NumberType A Sonata\AdminBundle\Form\Type\Filter\NumberType instance.
     */
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.admin.form.type.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\AdminType A Sonata\AdminBundle\Form\Type\AdminType instance.
     */
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }

    /**
     * Gets the 'sonata.admin.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\CollectionType A Sonata\AdminBundle\Form\Type\CollectionType instance.
     */
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelAutocompleteType A Sonata\AdminBundle\Form\Type\ModelAutocompleteType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelAutocompleteService()
    {
        return $this->services['sonata.admin.form.type.model_autocomplete'] = new \Sonata\AdminBundle\Form\Type\ModelAutocompleteType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelType A Sonata\AdminBundle\Form\Type\ModelType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelHiddenType A Sonata\AdminBundle\Form\Type\ModelHiddenType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelTypeList A Sonata\AdminBundle\Form\Type\ModelTypeList instance.
     */
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }

    /**
     * Gets the 'sonata.admin.form.type.model_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Form\Type\ModelReferenceType A Sonata\AdminBundle\Form\Type\ModelReferenceType instance.
     */
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_datagrid_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_list_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser A Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser instance.
     */
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'sonata.admin.guesser.orm_show_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Guesser\TypeGuesserChain A Sonata\AdminBundle\Guesser\TypeGuesserChain instance.
     */
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }

    /**
     * Gets the 'sonata.admin.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\AdminHelper A Sonata\AdminBundle\Admin\AdminHelper instance.
     */
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.label.strategy.bc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy A Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.form_component' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy A Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy A Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.label.strategy.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy A Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy instance.
     */
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }

    /**
     * Gets the 'sonata.admin.manager.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Model\ModelManager A Sonata\DoctrineORMAdminBundle\Model\ModelManager instance.
     */
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminAclManipulator A Sonata\AdminBundle\Util\AdminAclManipulator instance.
     */
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.manipulator.acl.object.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator A Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator instance.
     */
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }

    /**
     * Gets the 'sonata.admin.object.manipulator.acl.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Util\AdminObjectAclManipulator A Sonata\AdminBundle\Util\AdminObjectAclManipulator instance.
     */
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.boolean' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter A Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.callback' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter A Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.choice' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter A Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.class' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter A Sonata\DoctrineORMAdminBundle\Filter\ClassFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateFilter A Sonata\DoctrineORMAdminBundle\Filter\DateFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.date_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.datetime_range' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter A Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.model' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter A Sonata\DoctrineORMAdminBundle\Filter\ModelFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.number' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter A Sonata\DoctrineORMAdminBundle\Filter\NumberFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.string' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\StringFilter A Sonata\DoctrineORMAdminBundle\Filter\StringFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }

    /**
     * Gets the 'sonata.admin.orm.filter.type.time' service.
     *
     * @return \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter A Sonata\DoctrineORMAdminBundle\Filter\TimeFilter instance.
     */
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }

    /**
     * Gets the 'sonata.admin.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Admin\Pool A Sonata\AdminBundle\Admin\Pool instance.
     */
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'ALL FOR DEAL', 'bundles/sonataadmin/all-for-deal.png', array('html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true, 'use_icheck' => true, 'pager_links' => NULL, 'form_type' => 'standard', 'dropdown_number_groups_per_colums' => 2, 'title_mode' => 'both', 'javascripts' => array(0 => 'bundles/sonataadmin/vendor/jquery/dist/jquery.min.js', 1 => 'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js', 2 => 'bundles/sonatacore/vendor/moment/min/moment.min.js', 3 => 'bundles/sonataadmin/vendor/bootstrap/dist/js/bootstrap.min.js', 4 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 5 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js', 6 => 'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js', 7 => 'bundles/sonataadmin/jquery/jquery.form.js', 8 => 'bundles/sonataadmin/jquery/jquery.confirmExit.js', 9 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js', 10 => 'bundles/sonataadmin/vendor/select2/select2.min.js', 11 => 'bundles/sonataadmin/App.js', 12 => 'bundles/sonataadmin/Admin.js'), 'stylesheets' => array(0 => 'bundles/sonataadmin/vendor/bootstrap/dist/css/bootstrap.min.css', 1 => 'bundles/sonataadmin/vendor/AdminLTE/css/font-awesome.min.css', 2 => 'bundles/sonataadmin/vendor/AdminLTE/css/ionicons.min.css', 3 => 'bundles/sonataadmin/vendor/AdminLTE/css/AdminLTE.css', 4 => 'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 5 => 'bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css', 6 => 'bundles/sonataadmin/vendor/select2/select2.css', 7 => 'bundles/sonataadmin/vendor/select2/select2-bootstrap.css', 8 => 'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', 9 => 'bundles/sonataadmin/css/styles.css', 10 => 'bundles/sonataadmin/css/layout.css')), array());

        $instance->setTemplates(array('history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'admin.produit', 1 => 'admin.service', 2 => 'sonata.user.admin.user', 3 => 'sonata.user.admin.group', 4 => 'sonata.classification.admin.category', 5 => 'sonata.classification.admin.tag', 6 => 'sonata.classification.admin.collection', 7 => 'sonata.media.admin.media', 8 => 'sonata.media.admin.gallery', 9 => 'sonata.media.admin.gallery_has_media', 10 => 'sonata.news.admin.post', 11 => 'sonata.news.admin.comment'));
        $instance->setAdminGroups(array('Produits' => array('label' => 'Produits', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'admin.produit')), 'Services' => array('label' => 'Services', 'label_catalogue' => 'SonataAdminBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'admin.service')), 'sonata_user' => array('label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group')), 'sonata_classification' => array('label' => 'sonata_classification', 'label_catalogue' => 'SonataClassificationBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.classification.admin.category', 1 => 'sonata.classification.admin.tag', 2 => 'sonata.classification.admin.collection')), 'sonata_media' => array('label' => 'sonata_media', 'label_catalogue' => 'SonataMediaBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.media.admin.media', 1 => 'sonata.media.admin.gallery')), 'sonata_blog' => array('label' => 'sonata_blog', 'label_catalogue' => 'SonataNewsBundle', 'icon' => '<i class="fa fa-folder"></i>', 'roles' => array(), 'items' => array(0 => 'sonata.news.admin.post', 1 => 'sonata.news.admin.comment'))));
        $instance->setAdminClasses(array('Application\\ProduitBundle\\Entity\\Produit' => array(0 => 'admin.produit'), 'Application\\ServiceBundle\\Entity\\Service' => array(0 => 'admin.service'), 'Application\\Sonata\\UserBundle\\Entity\\User' => array(0 => 'sonata.user.admin.user'), 'Application\\Sonata\\UserBundle\\Entity\\Group' => array(0 => 'sonata.user.admin.group'), 'Application\\Sonata\\ClassificationBundle\\Entity\\Category' => array(0 => 'sonata.classification.admin.category'), 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag' => array(0 => 'sonata.classification.admin.tag'), 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection' => array(0 => 'sonata.classification.admin.collection'), 'Application\\Sonata\\MediaBundle\\Entity\\Media' => array(0 => 'sonata.media.admin.media'), 'Application\\Sonata\\MediaBundle\\Entity\\Gallery' => array(0 => 'sonata.media.admin.gallery'), 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia' => array(0 => 'sonata.media.admin.gallery_has_media'), 'Application\\Sonata\\NewsBundle\\Entity\\Post' => array(0 => 'sonata.news.admin.post'), 'Application\\Sonata\\NewsBundle\\Entity\\Comment' => array(0 => 'sonata.news.admin.comment')));

        return $instance;
    }

    /**
     * Gets the 'sonata.admin.route.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCache A Sonata\AdminBundle\Route\RoutesCache instance.
     */
    protected function getSonata_Admin_Route_CacheService()
    {
        return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache((__DIR__.'/sonata/admin'), true);
    }

    /**
     * Gets the 'sonata.admin.route.cache_warmup' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\RoutesCacheWarmUp A Sonata\AdminBundle\Route\RoutesCacheWarmUp instance.
     */
    protected function getSonata_Admin_Route_CacheWarmupService()
    {
        return $this->services['sonata.admin.route.cache_warmup'] = new \Sonata\AdminBundle\Route\RoutesCacheWarmUp($this->get('sonata.admin.route.cache'), $this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.route.default_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\DefaultRouteGenerator A Sonata\AdminBundle\Route\DefaultRouteGenerator instance.
     */
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'), $this->get('sonata.admin.route.cache'));
    }

    /**
     * Gets the 'sonata.admin.route.path_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\PathInfoBuilder A Sonata\AdminBundle\Route\PathInfoBuilder instance.
     */
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route.query_string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\QueryStringBuilder A Sonata\AdminBundle\Route\QueryStringBuilder instance.
     */
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }

    /**
     * Gets the 'sonata.admin.route_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Route\AdminPoolLoader A Sonata\AdminBundle\Route\AdminPoolLoader instance.
     */
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'admin.produit', 1 => 'admin.service', 2 => 'sonata.user.admin.user', 3 => 'sonata.user.admin.group', 4 => 'sonata.classification.admin.category', 5 => 'sonata.classification.admin.tag', 6 => 'sonata.classification.admin.collection', 7 => 'sonata.media.admin.media', 8 => 'sonata.media.admin.gallery', 9 => 'sonata.media.admin.gallery_has_media', 10 => 'sonata.news.admin.post', 11 => 'sonata.news.admin.comment'), $this);
    }

    /**
     * Gets the 'sonata.admin.search.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Search\SearchHandler A Sonata\AdminBundle\Search\SearchHandler instance.
     */
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }

    /**
     * Gets the 'sonata.admin.security.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler A Sonata\AdminBundle\Security\Handler\NoopSecurityHandler instance.
     */
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }

    /**
     * Gets the 'sonata.admin.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension A Sonata\AdminBundle\Twig\Extension\SonataAdminExtension instance.
     */
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.admin.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\AdminBundle\Validator\InlineValidator A Sonata\AdminBundle\Validator\InlineValidator instance.
     */
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata.block.cache.handler.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\HttpCacheHandler A Sonata\BlockBundle\Cache\HttpCacheHandler instance.
     */
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.cache.handler.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Cache\NoopHttpCacheHandler A Sonata\BlockBundle\Cache\NoopHttpCacheHandler instance.
     */
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }

    /**
     * Gets the 'sonata.block.context_manager.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockContextManager A Sonata\BlockBundle\Block\BlockContextManager instance.
     */
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.user.block.menu' => 'sonata.cache.noop', 'sonata.admin.block.search_result' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.timeline.block.timeline' => 'sonata.cache.noop')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.exception.filter.debug_only' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter A Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(true);
    }

    /**
     * Gets the 'sonata.block.exception.filter.ignore_block_exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter A Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_all' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepAllFilter A Sonata\BlockBundle\Exception\Filter\KeepAllFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }

    /**
     * Gets the 'sonata.block.exception.filter.keep_none' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter A Sonata\BlockBundle\Exception\Filter\KeepNoneFilter instance.
     */
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineRenderer A Sonata\BlockBundle\Exception\Renderer\InlineRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }

    /**
     * Gets the 'sonata.block.exception.renderer.inline_debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer A Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', true, true);
    }

    /**
     * Gets the 'sonata.block.exception.renderer.throw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer A Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer instance.
     */
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }

    /**
     * Gets the 'sonata.block.exception.strategy.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Exception\Strategy\StrategyManager A Sonata\BlockBundle\Exception\Strategy\StrategyManager instance.
     */
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());

        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');

        return $instance;
    }

    /**
     * Gets the 'sonata.block.form.type.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ServiceListType A Sonata\BlockBundle\Form\Type\ServiceListType instance.
     */
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'));
    }

    /**
     * Gets the 'sonata.block.form.type.container_template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Form\Type\ContainerTemplateType A Sonata\BlockBundle\Form\Type\ContainerTemplateType instance.
     */
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }

    /**
     * Gets the 'sonata.block.loader.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockLoaderChain A Sonata\BlockBundle\Block\BlockLoaderChain instance.
     */
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }

    /**
     * Gets the 'sonata.block.loader.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Loader\ServiceLoader A Sonata\BlockBundle\Block\Loader\ServiceLoader instance.
     */
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.user.block.menu', 2 => 'sonata.admin.block.search_result', 3 => 'sonata.block.service.text', 4 => 'sonata.timeline.block.timeline'));
    }

    /**
     * Gets the 'sonata.block.renderer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\BlockRenderer A Sonata\BlockBundle\Block\BlockRenderer instance.
     */
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the 'sonata.block.service.container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\ContainerBlockService A Sonata\BlockBundle\Block\Service\ContainerBlockService instance.
     */
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.empty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\EmptyBlockService A Sonata\BlockBundle\Block\Service\EmptyBlockService instance.
     */
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\MenuBlockService A Sonata\BlockBundle\Block\Service\MenuBlockService instance.
     */
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), array());
    }

    /**
     * Gets the 'sonata.block.service.rss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\RssBlockService A Sonata\BlockBundle\Block\Service\RssBlockService instance.
     */
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService A Sonata\BlockBundle\Block\Service\TemplateBlockService instance.
     */
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.service.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TextBlockService A Sonata\BlockBundle\Block\Service\TextBlockService instance.
     */
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.block.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Templating\Helper\BlockHelper A Sonata\BlockBundle\Templating\Helper\BlockHelper instance.
     */
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.user.block.menu' => 'sonata.cache.noop', 'sonata.admin.block.search_result' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.timeline.block.timeline' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('debug.event_dispatcher'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sonata.block.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\BlockBundle\Twig\GlobalVariables A Sonata\BlockBundle\Twig\GlobalVariables instance.
     */
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }

    /**
     * Gets the 'sonata.classification.admin.category' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\CategoryAdmin A Sonata\ClassificationBundle\Admin\CategoryAdmin instance.
     */
    protected function getSonata_Classification_Admin_CategoryService()
    {
        $instance = new \Sonata\ClassificationBundle\Admin\CategoryAdmin('sonata.classification.admin.category', 'Application\\Sonata\\ClassificationBundle\\Entity\\Category', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('label_categories');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.classification.admin.collection' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\CollectionAdmin A Sonata\ClassificationBundle\Admin\CollectionAdmin instance.
     */
    protected function getSonata_Classification_Admin_CollectionService()
    {
        $instance = new \Sonata\ClassificationBundle\Admin\CollectionAdmin('sonata.classification.admin.collection', 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('label_collections');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.classification.admin.tag' service.
     *
     * @return \Sonata\ClassificationBundle\Admin\TagAdmin A Sonata\ClassificationBundle\Admin\TagAdmin instance.
     */
    protected function getSonata_Classification_Admin_TagService()
    {
        $instance = new \Sonata\ClassificationBundle\Admin\TagAdmin('sonata.classification.admin.tag', 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataClassificationBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('label_tags');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.classification.api.form.type.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType A Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType instance.
     */
    protected function getSonata_Classification_Api_Form_Type_CategoryService()
    {
        return $this->services['sonata.classification.api.form.type.category'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_classification_api_form_category', 'Application\\Sonata\\ClassificationBundle\\Entity\\Category', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.classification.api.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType A Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType instance.
     */
    protected function getSonata_Classification_Api_Form_Type_CollectionService()
    {
        return $this->services['sonata.classification.api.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_classification_api_form_collection', 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.classification.api.form.type.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType A Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType instance.
     */
    protected function getSonata_Classification_Api_Form_Type_TagService()
    {
        return $this->services['sonata.classification.api.form.type.tag'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_classification_api_form_tag', 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.classification.controller.api.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Controller\Api\CategoryController A Sonata\ClassificationBundle\Controller\Api\CategoryController instance.
     */
    protected function getSonata_Classification_Controller_Api_CategoryService()
    {
        return $this->services['sonata.classification.controller.api.category'] = new \Sonata\ClassificationBundle\Controller\Api\CategoryController($this->get('sonata.classification.manager.category'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.classification.controller.api.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Controller\Api\CollectionController A Sonata\ClassificationBundle\Controller\Api\CollectionController instance.
     */
    protected function getSonata_Classification_Controller_Api_CollectionService()
    {
        return $this->services['sonata.classification.controller.api.collection'] = new \Sonata\ClassificationBundle\Controller\Api\CollectionController($this->get('sonata.classification.manager.collection'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.classification.controller.api.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Controller\Api\TagController A Sonata\ClassificationBundle\Controller\Api\TagController instance.
     */
    protected function getSonata_Classification_Controller_Api_TagService()
    {
        return $this->services['sonata.classification.controller.api.tag'] = new \Sonata\ClassificationBundle\Controller\Api\TagController($this->get('sonata.classification.manager.tag'), $this->get('form.factory'));
    }

    /**
     * Gets the 'sonata.classification.form.type.category_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Form\Type\CategorySelectorType A Sonata\ClassificationBundle\Form\Type\CategorySelectorType instance.
     */
    protected function getSonata_Classification_Form_Type_CategorySelectorService()
    {
        return $this->services['sonata.classification.form.type.category_selector'] = new \Sonata\ClassificationBundle\Form\Type\CategorySelectorType($this->get('sonata.classification.manager.category'));
    }

    /**
     * Gets the 'sonata.classification.manager.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Entity\CategoryManager A Sonata\ClassificationBundle\Entity\CategoryManager instance.
     */
    protected function getSonata_Classification_Manager_CategoryService()
    {
        return $this->services['sonata.classification.manager.category'] = new \Sonata\ClassificationBundle\Entity\CategoryManager('Application\\Sonata\\ClassificationBundle\\Entity\\Category', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.classification.manager.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Entity\CollectionManager A Sonata\ClassificationBundle\Entity\CollectionManager instance.
     */
    protected function getSonata_Classification_Manager_CollectionService()
    {
        return $this->services['sonata.classification.manager.collection'] = new \Sonata\ClassificationBundle\Entity\CollectionManager('Application\\Sonata\\ClassificationBundle\\Entity\\Collection', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.classification.manager.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Entity\TagManager A Sonata\ClassificationBundle\Entity\TagManager instance.
     */
    protected function getSonata_Classification_Manager_TagService()
    {
        return $this->services['sonata.classification.manager.tag'] = new \Sonata\ClassificationBundle\Entity\TagManager('Application\\Sonata\\ClassificationBundle\\Entity\\Tag', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.classification.serializer.handler.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Serializer\CategorySerializerHandler A Sonata\ClassificationBundle\Serializer\CategorySerializerHandler instance.
     */
    protected function getSonata_Classification_Serializer_Handler_CategoryService()
    {
        return $this->services['sonata.classification.serializer.handler.category'] = new \Sonata\ClassificationBundle\Serializer\CategorySerializerHandler($this->get('sonata.classification.manager.category'));
    }

    /**
     * Gets the 'sonata.classification.serializer.handler.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Serializer\CollectionSerializerHandler A Sonata\ClassificationBundle\Serializer\CollectionSerializerHandler instance.
     */
    protected function getSonata_Classification_Serializer_Handler_CollectionService()
    {
        return $this->services['sonata.classification.serializer.handler.collection'] = new \Sonata\ClassificationBundle\Serializer\CollectionSerializerHandler($this->get('sonata.classification.manager.collection'));
    }

    /**
     * Gets the 'sonata.classification.serializer.handler.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\ClassificationBundle\Serializer\TagSerializerHandler A Sonata\ClassificationBundle\Serializer\TagSerializerHandler instance.
     */
    protected function getSonata_Classification_Serializer_Handler_TagService()
    {
        return $this->services['sonata.classification.serializer.handler.tag'] = new \Sonata\ClassificationBundle\Serializer\TagSerializerHandler($this->get('sonata.classification.manager.tag'));
    }

    /**
     * Gets the 'sonata.core.date.moment_format_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Date\MomentFormatConverter A Sonata\CoreBundle\Date\MomentFormatConverter instance.
     */
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }

    /**
     * Gets the 'sonata.core.flashmessage.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\FlashMessage\FlashManager A Sonata\CoreBundle\FlashMessage\FlashManager instance.
     */
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager($this->get('session'), $this->get('translator'), array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'danger' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'danger' => 'danger'));
    }

    /**
     * Gets the 'sonata.core.flashmessage.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension A Sonata\CoreBundle\Twig\Extension\FlashMessageExtension instance.
     */
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension($this->get('sonata.core.flashmessage.manager'));
    }

    /**
     * Gets the 'sonata.core.form.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ImmutableArrayType A Sonata\CoreBundle\Form\Type\ImmutableArrayType instance.
     */
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }

    /**
     * Gets the 'sonata.core.form.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\BooleanType A Sonata\CoreBundle\Form\Type\BooleanType instance.
     */
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }

    /**
     * Gets the 'sonata.core.form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\CollectionType A Sonata\CoreBundle\Form\Type\CollectionType instance.
     */
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }

    /**
     * Gets the 'sonata.core.form.type.color_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\ColorSelectorType A Sonata\CoreBundle\Form\Type\ColorSelectorType instance.
     */
    protected function getSonata_Core_Form_Type_ColorSelectorService()
    {
        return $this->services['sonata.core.form.type.color_selector'] = new \Sonata\CoreBundle\Form\Type\ColorSelectorType();
    }

    /**
     * Gets the 'sonata.core.form.type.date_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DatePickerType A Sonata\CoreBundle\Form\Type\DatePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType($this->get('sonata.core.date.moment_format_converter'), $this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangeType A Sonata\CoreBundle\Form\Type\DateRangeType instance.
     */
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.date_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateRangePickerType A Sonata\CoreBundle\Form\Type\DateRangePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DateRangePickerService()
    {
        return $this->services['sonata.core.form.type.date_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimePickerType A Sonata\CoreBundle\Form\Type\DateTimePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType($this->get('sonata.core.date.moment_format_converter'), $this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangeType A Sonata\CoreBundle\Form\Type\DateTimeRangeType instance.
     */
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.datetime_range_picker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType A Sonata\CoreBundle\Form\Type\DateTimeRangePickerType instance.
     */
    protected function getSonata_Core_Form_Type_DatetimeRangePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_range_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangePickerType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.equal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\EqualType A Sonata\CoreBundle\Form\Type\EqualType instance.
     */
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.form.type.translatable_choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\TranslatableChoiceType A Sonata\CoreBundle\Form\Type\TranslatableChoiceType instance.
     */
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType($this->get('translator'));
    }

    /**
     * Gets the 'sonata.core.model.adapter.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Model\Adapter\AdapterChain A Sonata\CoreBundle\Model\Adapter\AdapterChain instance.
     */
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.slugify.cocur' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Cocur\Slugify\Slugify A Cocur\Slugify\Slugify instance.
     */
    protected function getSonata_Core_Slugify_CocurService()
    {
        return $this->services['sonata.core.slugify.cocur'] = new \Cocur\Slugify\Slugify();
    }

    /**
     * Gets the 'sonata.core.slugify.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Component\NativeSlugify A Sonata\CoreBundle\Component\NativeSlugify instance.
     */
    protected function getSonata_Core_Slugify_NativeService()
    {
        return $this->services['sonata.core.slugify.native'] = new \Sonata\CoreBundle\Component\NativeSlugify();
    }

    /**
     * Gets the 'sonata.core.twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance.
     */
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'sonata.core.twig.extension.wrapping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\FormTypeExtension A Sonata\CoreBundle\Twig\Extension\FormTypeExtension instance.
     */
    protected function getSonata_Core_Twig_Extension_WrappingService()
    {
        return $this->services['sonata.core.twig.extension.wrapping'] = new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard');
    }

    /**
     * Gets the 'sonata.core.twig.status_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\StatusExtension A Sonata\CoreBundle\Twig\Extension\StatusExtension instance.
     */
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();

        $instance->addStatusService($this->get('sonata.core.flashmessage.manager'));

        return $instance;
    }

    /**
     * Gets the 'sonata.core.twig.template_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Twig\Extension\TemplateExtension A Sonata\CoreBundle\Twig\Extension\TemplateExtension instance.
     */
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, $this->get('translator'), $this->get('sonata.core.model.adapter.chain'));
    }

    /**
     * Gets the 'sonata.core.validator.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Validator\InlineValidator A Sonata\CoreBundle\Validator\InlineValidator instance.
     */
    protected function getSonata_Core_Validator_InlineService()
    {
        return $this->services['sonata.core.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }

    /**
     * Gets the 'sonata.easy_extends.doctrine.mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper A Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper instance.
     */
    protected function getSonata_EasyExtends_Doctrine_MapperService()
    {
        $this->services['sonata.easy_extends.doctrine.mapper'] = $instance = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper($this->get('doctrine'), array());

        $instance->addAssociation('Application\\Sonata\\UserBundle\\Entity\\User', 'mapManyToMany', array(0 => array('fieldName' => 'groups', 'targetEntity' => 'Application\\Sonata\\UserBundle\\Entity\\Group', 'cascade' => array(), 'joinTable' => array('name' => 'fos_user_user_group', 'joinColumns' => array(0 => array('name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'inverseJoinColumns' => array(0 => array('name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE'))))));
        $instance->addAssociation('Application\\Sonata\\ClassificationBundle\\Entity\\Category', 'mapOneToMany', array(0 => array('fieldName' => 'children', 'targetEntity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Category', 'cascade' => array(0 => 'remove', 1 => 'persist'), 'mappedBy' => 'parent', 'orphanRemoval' => true, 'orderBy' => array('position' => 'ASC'))));
        $instance->addAssociation('Application\\Sonata\\ClassificationBundle\\Entity\\Category', 'mapManyToOne', array(0 => array('fieldName' => 'parent', 'targetEntity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Category', 'cascade' => array(0 => 'remove', 1 => 'persist', 2 => 'refresh', 3 => 'merge', 4 => 'detach'), 'mappedBy' => NULL, 'inversedBy' => 'children', 'joinColumns' => array(0 => array('name' => 'parent_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'orphanRemoval' => false), 1 => array('fieldName' => 'media', 'targetEntity' => 'Application\\Sonata\\MediaBundle\\Entity\\Media', 'cascade' => array(0 => 'remove', 1 => 'persist', 2 => 'refresh', 3 => 'merge', 4 => 'detach'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'media_id', 'referencedColumnName' => 'id', 'onDelete' => 'SET NULL')), 'orphanRemoval' => false)));
        $instance->addAssociation('Application\\Sonata\\ClassificationBundle\\Entity\\Collection', 'mapManyToOne', array(0 => array('fieldName' => 'media', 'targetEntity' => 'Application\\Sonata\\MediaBundle\\Entity\\Media', 'cascade' => array(0 => 'remove', 1 => 'persist', 2 => 'refresh', 3 => 'merge', 4 => 'detach'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'media_id', 'referencedColumnName' => 'id', 'onDelete' => 'SET NULL')), 'orphanRemoval' => false)));
        $instance->addAssociation('Application\\Sonata\\MediaBundle\\Entity\\Media', 'mapOneToMany', array(0 => array('fieldName' => 'galleryHasMedias', 'targetEntity' => 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia', 'cascade' => array(0 => 'persist'), 'mappedBy' => 'media', 'orphanRemoval' => false)));
        $instance->addAssociation('Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia', 'mapManyToOne', array(0 => array('fieldName' => 'gallery', 'targetEntity' => 'Application\\Sonata\\MediaBundle\\Entity\\Gallery', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => 'galleryHasMedias', 'joinColumns' => array(0 => array('name' => 'gallery_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false), 1 => array('fieldName' => 'media', 'targetEntity' => 'Application\\Sonata\\MediaBundle\\Entity\\Media', 'cascade' => array(0 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => 'galleryHasMedias', 'joinColumns' => array(0 => array('name' => 'media_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false)));
        $instance->addAssociation('Application\\Sonata\\MediaBundle\\Entity\\Gallery', 'mapOneToMany', array(0 => array('fieldName' => 'galleryHasMedias', 'targetEntity' => 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia', 'cascade' => array(0 => 'persist'), 'mappedBy' => 'gallery', 'orphanRemoval' => true, 'orderBy' => array('position' => 'ASC'))));
        $instance->addAssociation('Application\\Sonata\\NewsBundle\\Entity\\Post', 'mapOneToMany', array(0 => array('fieldName' => 'comments', 'targetEntity' => 'Application\\Sonata\\NewsBundle\\Entity\\Comment', 'cascade' => array(0 => 'remove', 1 => 'persist'), 'mappedBy' => 'post', 'orphanRemoval' => true, 'orderBy' => array('createdAt' => 'DESC'))));
        $instance->addAssociation('Application\\Sonata\\NewsBundle\\Entity\\Post', 'mapManyToOne', array(0 => array('fieldName' => 'image', 'targetEntity' => 'Application\\Sonata\\MediaBundle\\Entity\\Media', 'cascade' => array(0 => 'remove', 1 => 'persist', 2 => 'refresh', 3 => 'merge', 4 => 'detach'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'image_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false), 1 => array('fieldName' => 'author', 'targetEntity' => 'Application\\Sonata\\UserBundle\\Entity\\User', 'cascade' => array(1 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'author_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false), 2 => array('fieldName' => 'collection', 'targetEntity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection', 'cascade' => array(1 => 'persist'), 'mappedBy' => NULL, 'inversedBy' => NULL, 'joinColumns' => array(0 => array('name' => 'collection_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false)));
        $instance->addAssociation('Application\\Sonata\\NewsBundle\\Entity\\Post', 'mapManyToMany', array(0 => array('fieldName' => 'tags', 'targetEntity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag', 'cascade' => array(1 => 'persist'), 'joinTable' => array('name' => 'news__post_tag', 'joinColumns' => array(0 => array('name' => 'post_id', 'referencedColumnName' => 'id')), 'inverseJoinColumns' => array(0 => array('name' => 'tag_id', 'referencedColumnName' => 'id'))))));
        $instance->addAssociation('Application\\Sonata\\NewsBundle\\Entity\\Comment', 'mapManyToOne', array(0 => array('fieldName' => 'post', 'targetEntity' => 'Application\\Sonata\\NewsBundle\\Entity\\Post', 'cascade' => array(), 'mappedBy' => NULL, 'inversedBy' => 'comments', 'joinColumns' => array(0 => array('name' => 'post_id', 'referencedColumnName' => 'id')), 'orphanRemoval' => false)));

        return $instance;
    }

    /**
     * Gets the 'sonata.easy_extends.generator.bundle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\BundleGenerator A Sonata\EasyExtendsBundle\Generator\BundleGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_BundleService()
    {
        return $this->services['sonata.easy_extends.generator.bundle'] = new \Sonata\EasyExtendsBundle\Generator\BundleGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.odm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OdmGenerator A Sonata\EasyExtendsBundle\Generator\OdmGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_OdmService()
    {
        return $this->services['sonata.easy_extends.generator.odm'] = new \Sonata\EasyExtendsBundle\Generator\OdmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\OrmGenerator A Sonata\EasyExtendsBundle\Generator\OrmGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_OrmService()
    {
        return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.phpcr' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator A Sonata\EasyExtendsBundle\Generator\PHPCRGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_PhpcrService()
    {
        return $this->services['sonata.easy_extends.generator.phpcr'] = new \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator();
    }

    /**
     * Gets the 'sonata.easy_extends.generator.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\EasyExtendsBundle\Generator\SerializerGenerator A Sonata\EasyExtendsBundle\Generator\SerializerGenerator instance.
     */
    protected function getSonata_EasyExtends_Generator_SerializerService()
    {
        return $this->services['sonata.easy_extends.generator.serializer'] = new \Sonata\EasyExtendsBundle\Generator\SerializerGenerator();
    }

    /**
     * Gets the 'sonata.formatter.block.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Block\FormatterBlockService A Sonata\FormatterBundle\Block\FormatterBlockService instance.
     */
    protected function getSonata_Formatter_Block_FormatterService()
    {
        return $this->services['sonata.formatter.block.formatter'] = new \Sonata\FormatterBundle\Block\FormatterBlockService('sonata.block.empty', $this->get('templating'));
    }

    /**
     * Gets the 'sonata.formatter.ckeditor.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Admin\CkeditorAdminExtension A Sonata\FormatterBundle\Admin\CkeditorAdminExtension instance.
     */
    protected function getSonata_Formatter_Ckeditor_ExtensionService()
    {
        return $this->services['sonata.formatter.ckeditor.extension'] = new \Sonata\FormatterBundle\Admin\CkeditorAdminExtension();
    }

    /**
     * Gets the 'sonata.formatter.form.type.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Form\Type\FormatterType A Sonata\FormatterBundle\Form\Type\FormatterType instance.
     */
    protected function getSonata_Formatter_Form_Type_SelectorService()
    {
        return $this->services['sonata.formatter.form.type.selector'] = new \Sonata\FormatterBundle\Form\Type\FormatterType($this->get('sonata.formatter.pool'), $this->get('translator'), $this->get('ivory_ck_editor.config_manager'));
    }

    /**
     * Gets the 'sonata.formatter.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\Pool A Sonata\FormatterBundle\Formatter\Pool instance.
     */
    protected function getSonata_Formatter_PoolService()
    {
        $a = $this->get('sonata.formatter.text.raw');

        $this->services['sonata.formatter.pool'] = $instance = new \Sonata\FormatterBundle\Formatter\Pool($this->get('logger'));

        $instance->add('markdown', $this->get('sonata.formatter.text.markdown'), $this->get('sonata.formatter.twig.env.markdown'));
        $instance->add('text', $this->get('sonata.formatter.text.text'), $this->get('sonata.formatter.twig.env.text'));
        $instance->add('rawhtml', $a, $this->get('sonata.formatter.twig.env.rawhtml'));
        $instance->add('richhtml', $a, $this->get('sonata.formatter.twig.env.richhtml'));
        $instance->add('twig', $this->get('sonata.formatter.text.twigengine'), NULL);

        return $instance;
    }

    /**
     * Gets the 'sonata.formatter.text.markdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\MarkdownFormatter A Sonata\FormatterBundle\Formatter\MarkdownFormatter instance.
     */
    protected function getSonata_Formatter_Text_MarkdownService()
    {
        return $this->services['sonata.formatter.text.markdown'] = new \Sonata\FormatterBundle\Formatter\MarkdownFormatter($this->get('markdown.parser'));
    }

    /**
     * Gets the 'sonata.formatter.text.raw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\RawFormatter A Sonata\FormatterBundle\Formatter\RawFormatter instance.
     */
    protected function getSonata_Formatter_Text_RawService()
    {
        return $this->services['sonata.formatter.text.raw'] = new \Sonata\FormatterBundle\Formatter\RawFormatter();
    }

    /**
     * Gets the 'sonata.formatter.text.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\TextFormatter A Sonata\FormatterBundle\Formatter\TextFormatter instance.
     */
    protected function getSonata_Formatter_Text_TextService()
    {
        return $this->services['sonata.formatter.text.text'] = new \Sonata\FormatterBundle\Formatter\TextFormatter();
    }

    /**
     * Gets the 'sonata.formatter.text.twigengine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Formatter\TwigFormatter A Sonata\FormatterBundle\Formatter\TwigFormatter instance.
     */
    protected function getSonata_Formatter_Text_TwigengineService()
    {
        return $this->services['sonata.formatter.text.twigengine'] = new \Sonata\FormatterBundle\Formatter\TwigFormatter($this->get('twig'));
    }

    /**
     * Gets the 'sonata.formatter.twig.control_flow' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Extension\ControlFlowExtension A Sonata\FormatterBundle\Extension\ControlFlowExtension instance.
     */
    protected function getSonata_Formatter_Twig_ControlFlowService()
    {
        return $this->services['sonata.formatter.twig.control_flow'] = new \Sonata\FormatterBundle\Extension\ControlFlowExtension();
    }

    /**
     * Gets the 'sonata.formatter.twig.gist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Extension\GistExtension A Sonata\FormatterBundle\Extension\GistExtension instance.
     */
    protected function getSonata_Formatter_Twig_GistService()
    {
        return $this->services['sonata.formatter.twig.gist'] = new \Sonata\FormatterBundle\Extension\GistExtension();
    }

    /**
     * Gets the 'sonata.formatter.validator.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\FormatterBundle\Validator\Constraints\FormatterValidator A Sonata\FormatterBundle\Validator\Constraints\FormatterValidator instance.
     */
    protected function getSonata_Formatter_Validator_FormatterService()
    {
        return $this->services['sonata.formatter.validator.formatter'] = new \Sonata\FormatterBundle\Validator\Constraints\FormatterValidator($this->get('sonata.formatter.pool'));
    }

    /**
     * Gets the 'sonata.intl.locale_detector.request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Locale\RequestStackDetector A Sonata\IntlBundle\Locale\RequestStackDetector instance.
     */
    protected function getSonata_Intl_LocaleDetector_RequestStackService()
    {
        return $this->services['sonata.intl.locale_detector.request_stack'] = new \Sonata\IntlBundle\Locale\RequestStackDetector($this->get('request_stack'), 'fr');
    }

    /**
     * Gets the 'sonata.intl.templating.helper.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\DateTimeHelper A Sonata\IntlBundle\Templating\Helper\DateTimeHelper instance.
     */
    protected function getSonata_Intl_Templating_Helper_DatetimeService()
    {
        return $this->services['sonata.intl.templating.helper.datetime'] = new \Sonata\IntlBundle\Templating\Helper\DateTimeHelper($this->get('sonata.intl.timezone_detector.chain'), 'UTF-8', $this->get('sonata.intl.locale_detector.request_stack'));
    }

    /**
     * Gets the 'sonata.intl.templating.helper.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\LocaleHelper A Sonata\IntlBundle\Templating\Helper\LocaleHelper instance.
     */
    protected function getSonata_Intl_Templating_Helper_LocaleService()
    {
        return $this->services['sonata.intl.templating.helper.locale'] = new \Sonata\IntlBundle\Templating\Helper\LocaleHelper('UTF-8', $this->get('sonata.intl.locale_detector.request_stack'));
    }

    /**
     * Gets the 'sonata.intl.templating.helper.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Templating\Helper\NumberHelper A Sonata\IntlBundle\Templating\Helper\NumberHelper instance.
     */
    protected function getSonata_Intl_Templating_Helper_NumberService()
    {
        return $this->services['sonata.intl.templating.helper.number'] = new \Sonata\IntlBundle\Templating\Helper\NumberHelper('UTF-8', $this->get('sonata.intl.locale_detector.request_stack'));
    }

    /**
     * Gets the 'sonata.intl.timezone_detector.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Timezone\ChainTimezoneDetector A Sonata\IntlBundle\Timezone\ChainTimezoneDetector instance.
     */
    protected function getSonata_Intl_TimezoneDetector_ChainService()
    {
        $this->services['sonata.intl.timezone_detector.chain'] = $instance = new \Sonata\IntlBundle\Timezone\ChainTimezoneDetector('UTC');

        $instance->addDetector($this->get('sonata.intl.timezone_detector.user'));
        $instance->addDetector($this->get('sonata.intl.timezone_detector.locale'));

        return $instance;
    }

    /**
     * Gets the 'sonata.intl.timezone_detector.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector A Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector instance.
     */
    protected function getSonata_Intl_TimezoneDetector_LocaleService()
    {
        return $this->services['sonata.intl.timezone_detector.locale'] = new \Sonata\IntlBundle\Timezone\LocaleBasedTimezoneDetector($this->get('sonata.intl.locale_detector.request_stack'), array());
    }

    /**
     * Gets the 'sonata.intl.timezone_detector.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\IntlBundle\Timezone\UserBasedTimezoneDetector A Sonata\IntlBundle\Timezone\UserBasedTimezoneDetector instance.
     */
    protected function getSonata_Intl_TimezoneDetector_UserService()
    {
        return $this->services['sonata.intl.timezone_detector.user'] = new \Sonata\IntlBundle\Timezone\UserBasedTimezoneDetector($this->get('security.token_storage'));
    }

    /**
     * Gets the 'sonata.media.adapter.filesystem.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Filesystem\Local A Sonata\MediaBundle\Filesystem\Local instance.
     */
    protected function getSonata_Media_Adapter_Filesystem_LocalService()
    {
        return $this->services['sonata.media.adapter.filesystem.local'] = new \Sonata\MediaBundle\Filesystem\Local(($this->targetDirs[2].'/../web/uploads/media'), false);
    }

    /**
     * Gets the 'sonata.media.adapter.image.gd' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Gd\Imagine A Imagine\Gd\Imagine instance.
     */
    protected function getSonata_Media_Adapter_Image_GdService()
    {
        return $this->services['sonata.media.adapter.image.gd'] = new \Imagine\Gd\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.image.gmagick' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Gmagick\Imagine A Imagine\Gmagick\Imagine instance.
     */
    protected function getSonata_Media_Adapter_Image_GmagickService()
    {
        return $this->services['sonata.media.adapter.image.gmagick'] = new \Imagine\Gmagick\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.image.imagick' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Imagick\Imagine A Imagine\Imagick\Imagine instance.
     */
    protected function getSonata_Media_Adapter_Image_ImagickService()
    {
        return $this->services['sonata.media.adapter.image.imagick'] = new \Imagine\Imagick\Imagine();
    }

    /**
     * Gets the 'sonata.media.adapter.service.s3' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AmazonS3 A AmazonS3 instance.
     */
    protected function getSonata_Media_Adapter_Service_S3Service()
    {
        return $this->services['sonata.media.adapter.service.s3'] = new \AmazonS3(array());
    }

    /**
     * Gets the 'sonata.media.admin.gallery' service.
     *
     * @return \Sonata\MediaBundle\Admin\GalleryAdmin A Sonata\MediaBundle\Admin\GalleryAdmin instance.
     */
    protected function getSonata_Media_Admin_GalleryService()
    {
        $instance = new \Sonata\MediaBundle\Admin\GalleryAdmin('sonata.media.admin.gallery', 'Application\\Sonata\\MediaBundle\\Entity\\Gallery', 'SonataMediaBundle:GalleryAdmin', $this->get('sonata.media.pool'));

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('gallery');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataMediaBundle:GalleryAdmin:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.gallery_has_media' service.
     *
     * @return \Sonata\MediaBundle\Admin\GalleryHasMediaAdmin A Sonata\MediaBundle\Admin\GalleryHasMediaAdmin instance.
     */
    protected function getSonata_Media_Admin_GalleryHasMediaService()
    {
        $instance = new \Sonata\MediaBundle\Admin\GalleryHasMediaAdmin('sonata.media.admin.gallery_has_media', 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('gallery_has_media');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.media' service.
     *
     * @return \Sonata\MediaBundle\Admin\ORM\MediaAdmin A Sonata\MediaBundle\Admin\ORM\MediaAdmin instance.
     */
    protected function getSonata_Media_Admin_MediaService()
    {
        $instance = new \Sonata\MediaBundle\Admin\ORM\MediaAdmin('sonata.media.admin.media', 'Application\\Sonata\\MediaBundle\\Entity\\Media', 'SonataMediaBundle:MediaAdmin', $this->get('sonata.media.pool'));

        $instance->setModelManager($this->get('sonata.media.admin.media.manager'));
        $instance->setTranslationDomain('SonataMediaBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('media');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataMediaBundle:MediaAdmin:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataMediaBundle:MediaAdmin:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataMediaBundle:MediaAdmin:inner_row_media.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_flat_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.formatter.ckeditor.extension'));
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.admin.media.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Admin\Manager\DoctrineORMManager A Sonata\MediaBundle\Admin\Manager\DoctrineORMManager instance.
     */
    protected function getSonata_Media_Admin_Media_ManagerService()
    {
        return $this->services['sonata.media.admin.media.manager'] = new \Sonata\MediaBundle\Admin\Manager\DoctrineORMManager($this->get('doctrine'), $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.api.form.type.doctrine.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType A Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType instance.
     */
    protected function getSonata_Media_Api_Form_Type_Doctrine_MediaService()
    {
        return $this->services['sonata.media.api.form.type.doctrine.media'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_media_api_form_doctrine_media', 'Application\\Sonata\\MediaBundle\\Entity\\Media', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.media.api.form.type.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType A Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType instance.
     */
    protected function getSonata_Media_Api_Form_Type_GalleryService()
    {
        return $this->services['sonata.media.api.form.type.gallery'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_media_api_form_gallery', 'Application\\Sonata\\MediaBundle\\Entity\\Gallery', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.media.api.form.type.gallery_has_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType A Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType instance.
     */
    protected function getSonata_Media_Api_Form_Type_GalleryHasMediaService()
    {
        return $this->services['sonata.media.api.form.type.gallery_has_media'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_media_api_form_gallery_has_media', 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia', 'sonata_api_write');
    }

    /**
     * Gets the 'sonata.media.api.form.type.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Form\Type\ApiMediaType A Sonata\MediaBundle\Form\Type\ApiMediaType instance.
     */
    protected function getSonata_Media_Api_Form_Type_MediaService()
    {
        return $this->services['sonata.media.api.form.type.media'] = new \Sonata\MediaBundle\Form\Type\ApiMediaType($this->get('sonata.media.pool'), 'Application\\Sonata\\MediaBundle\\Entity\\Media');
    }

    /**
     * Gets the 'sonata.media.block.feature_media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Block\FeatureMediaBlockService A Sonata\MediaBundle\Block\FeatureMediaBlockService instance.
     */
    protected function getSonata_Media_Block_FeatureMediaService()
    {
        return $this->services['sonata.media.block.feature_media'] = new \Sonata\MediaBundle\Block\FeatureMediaBlockService('sonata.media.block.feature_media', $this->get('templating'), $this, $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.block.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Block\GalleryBlockService A Sonata\MediaBundle\Block\GalleryBlockService instance.
     */
    protected function getSonata_Media_Block_GalleryService()
    {
        return $this->services['sonata.media.block.gallery'] = new \Sonata\MediaBundle\Block\GalleryBlockService('sonata.media.block.gallery', $this->get('templating'), $this, $this->get('sonata.media.manager.gallery'));
    }

    /**
     * Gets the 'sonata.media.block.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Block\MediaBlockService A Sonata\MediaBundle\Block\MediaBlockService instance.
     */
    protected function getSonata_Media_Block_MediaService()
    {
        return $this->services['sonata.media.block.media'] = new \Sonata\MediaBundle\Block\MediaBlockService('sonata.media.block.media', $this->get('templating'), $this, $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.buzz.browser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Buzz\Browser A Buzz\Browser instance.
     */
    protected function getSonata_Media_Buzz_BrowserService()
    {
        return $this->services['sonata.media.buzz.browser'] = new \Buzz\Browser($this->get('sonata.media.buzz.connector.file_get_contents'));
    }

    /**
     * Gets the 'sonata.media.buzz.connector.curl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Buzz\Client\Curl A Buzz\Client\Curl instance.
     */
    protected function getSonata_Media_Buzz_Connector_CurlService()
    {
        $this->services['sonata.media.buzz.connector.curl'] = $instance = new \Buzz\Client\Curl();

        $instance->setIgnoreErrors(true);
        $instance->setMaxRedirects(5);
        $instance->setTimeout(5);
        $instance->setVerifyPeer(true);
        $instance->setProxy(NULL);

        return $instance;
    }

    /**
     * Gets the 'sonata.media.buzz.connector.file_get_contents' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Buzz\Client\FileGetContents A Buzz\Client\FileGetContents instance.
     */
    protected function getSonata_Media_Buzz_Connector_FileGetContentsService()
    {
        $this->services['sonata.media.buzz.connector.file_get_contents'] = $instance = new \Buzz\Client\FileGetContents();

        $instance->setIgnoreErrors(true);
        $instance->setMaxRedirects(5);
        $instance->setTimeout(5);
        $instance->setVerifyPeer(true);
        $instance->setProxy(NULL);

        return $instance;
    }

    /**
     * Gets the 'sonata.media.cdn.server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\CDN\Server A Sonata\MediaBundle\CDN\Server instance.
     */
    protected function getSonata_Media_Cdn_ServerService()
    {
        return $this->services['sonata.media.cdn.server'] = new \Sonata\MediaBundle\CDN\Server('http://localhost/tecOne/tec/web/uploads/media');
    }

    /**
     * Gets the 'sonata.media.doctrine.event_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber A Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber instance.
     */
    protected function getSonata_Media_Doctrine_EventSubscriberService()
    {
        return $this->services['sonata.media.doctrine.event_subscriber'] = new \Sonata\MediaBundle\Listener\ORM\MediaEventSubscriber($this);
    }

    /**
     * Gets the 'sonata.media.filesystem.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gaufrette\Filesystem A Gaufrette\Filesystem instance.
     */
    protected function getSonata_Media_Filesystem_LocalService()
    {
        return $this->services['sonata.media.filesystem.local'] = new \Gaufrette\Filesystem($this->get('sonata.media.adapter.filesystem.local'));
    }

    /**
     * Gets the 'sonata.media.form.type.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Form\Type\MediaType A Sonata\MediaBundle\Form\Type\MediaType instance.
     */
    protected function getSonata_Media_Form_Type_MediaService()
    {
        return $this->services['sonata.media.form.type.media'] = new \Sonata\MediaBundle\Form\Type\MediaType($this->get('sonata.media.pool'), 'Application\\Sonata\\MediaBundle\\Entity\\Media');
    }

    /**
     * Gets the 'sonata.media.formatter.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension A Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension instance.
     */
    protected function getSonata_Media_Formatter_TwigService()
    {
        return $this->services['sonata.media.formatter.twig'] = new \Sonata\MediaBundle\Twig\Extension\FormatterMediaExtension($this->get('sonata.media.twig.extension'));
    }

    /**
     * Gets the 'sonata.media.generator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Generator\DefaultGenerator A Sonata\MediaBundle\Generator\DefaultGenerator instance.
     */
    protected function getSonata_Media_Generator_DefaultService()
    {
        return $this->services['sonata.media.generator.default'] = new \Sonata\MediaBundle\Generator\DefaultGenerator();
    }

    /**
     * Gets the 'sonata.media.manager.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Entity\GalleryManager A Sonata\MediaBundle\Entity\GalleryManager instance.
     */
    protected function getSonata_Media_Manager_GalleryService()
    {
        return $this->services['sonata.media.manager.gallery'] = new \Sonata\MediaBundle\Entity\GalleryManager('Application\\Sonata\\MediaBundle\\Entity\\Gallery', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.media.manager.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Entity\MediaManager A Sonata\MediaBundle\Entity\MediaManager instance.
     */
    protected function getSonata_Media_Manager_MediaService()
    {
        return $this->services['sonata.media.manager.media'] = new \Sonata\MediaBundle\Entity\MediaManager('Application\\Sonata\\MediaBundle\\Entity\\Media', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.media.metadata.amazon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder A Sonata\MediaBundle\Metadata\AmazonMetadataBuilder instance.
     */
    protected function getSonata_Media_Metadata_AmazonService()
    {
        return $this->services['sonata.media.metadata.amazon'] = new \Sonata\MediaBundle\Metadata\AmazonMetadataBuilder();
    }

    /**
     * Gets the 'sonata.media.metadata.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Metadata\NoopMetadataBuilder A Sonata\MediaBundle\Metadata\NoopMetadataBuilder instance.
     */
    protected function getSonata_Media_Metadata_NoopService()
    {
        return $this->services['sonata.media.metadata.noop'] = new \Sonata\MediaBundle\Metadata\NoopMetadataBuilder();
    }

    /**
     * Gets the 'sonata.media.metadata.proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder A Sonata\MediaBundle\Metadata\ProxyMetadataBuilder instance.
     */
    protected function getSonata_Media_Metadata_ProxyService()
    {
        return $this->services['sonata.media.metadata.proxy'] = new \Sonata\MediaBundle\Metadata\ProxyMetadataBuilder($this, array());
    }

    /**
     * Gets the 'sonata.media.pool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\Pool A Sonata\MediaBundle\Provider\Pool instance.
     */
    protected function getSonata_Media_PoolService()
    {
        $this->services['sonata.media.pool'] = $instance = new \Sonata\MediaBundle\Provider\Pool('default');

        $instance->addContext('default', array(0 => 'sonata.media.provider.dailymotion', 1 => 'sonata.media.provider.youtube', 2 => 'sonata.media.provider.image', 3 => 'sonata.media.provider.file'), array('default_small' => array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true), 'default_big' => array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http'));
        $instance->addContext('news', array(0 => 'sonata.media.provider.dailymotion', 1 => 'sonata.media.provider.youtube', 2 => 'sonata.media.provider.image'), array('news_small' => array('width' => 150, 'quality' => 95, 'height' => false, 'format' => 'jpg', 'constraint' => true), 'news_big' => array('width' => 500, 'quality' => 90, 'height' => false, 'format' => 'jpg', 'constraint' => true)), array('strategy' => 'sonata.media.security.superadmin_strategy', 'mode' => 'http'));
        $instance->addDownloadSecurity('sonata.media.security.superadmin_strategy', $this->get('sonata.media.security.superadmin_strategy'));
        $instance->addProvider('sonata.media.provider.image', $this->get('sonata.media.provider.image'));
        $instance->addProvider('sonata.media.provider.file', $this->get('sonata.media.provider.file'));
        $instance->addProvider('sonata.media.provider.youtube', $this->get('sonata.media.provider.youtube'));
        $instance->addProvider('sonata.media.provider.dailymotion', $this->get('sonata.media.provider.dailymotion'));
        $instance->addProvider('sonata.media.provider.vimeo', $this->get('sonata.media.provider.vimeo'));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.dailymotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\DailyMotionProvider A Sonata\MediaBundle\Provider\DailyMotionProvider instance.
     */
    protected function getSonata_Media_Provider_DailymotionService()
    {
        $this->services['sonata.media.provider.dailymotion'] = $instance = new \Sonata\MediaBundle\Provider\DailyMotionProvider('sonata.media.provider.dailymotion', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_dailymotion.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('news_small', array('width' => 150, 'quality' => 95, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('news_big', array('width' => 500, 'quality' => 90, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\FileProvider A Sonata\MediaBundle\Provider\FileProvider instance.
     */
    protected function getSonata_Media_Provider_FileService()
    {
        $this->services['sonata.media.provider.file'] = $instance = new \Sonata\MediaBundle\Provider\FileProvider('sonata.media.provider.file', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), array(0 => 'pdf', 1 => 'txt', 2 => 'rtf', 3 => 'doc', 4 => 'docx', 5 => 'xls', 6 => 'xlsx', 7 => 'ppt', 8 => 'pptx', 9 => 'odt', 10 => 'odg', 11 => 'odp', 12 => 'ods', 13 => 'odc', 14 => 'odf', 15 => 'odb', 16 => 'csv', 17 => 'xml'), array(0 => 'application/pdf', 1 => 'application/x-pdf', 2 => 'application/rtf', 3 => 'text/html', 4 => 'text/rtf', 5 => 'text/plain', 6 => 'application/excel', 7 => 'application/msword', 8 => 'application/vnd.ms-excel', 9 => 'application/vnd.ms-powerpoint', 10 => 'application/vnd.ms-powerpoint', 11 => 'application/vnd.oasis.opendocument.text', 12 => 'application/vnd.oasis.opendocument.graphics', 13 => 'application/vnd.oasis.opendocument.presentation', 14 => 'application/vnd.oasis.opendocument.spreadsheet', 15 => 'application/vnd.oasis.opendocument.chart', 16 => 'application/vnd.oasis.opendocument.formula', 17 => 'application/vnd.oasis.opendocument.database', 18 => 'application/vnd.oasis.opendocument.image', 19 => 'text/comma-separated-values', 20 => 'text/xml', 21 => 'application/xml', 22 => 'application/zip'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_file.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\ImageProvider A Sonata\MediaBundle\Provider\ImageProvider instance.
     */
    protected function getSonata_Media_Provider_ImageService()
    {
        $this->services['sonata.media.provider.image'] = $instance = new \Sonata\MediaBundle\Provider\ImageProvider('sonata.media.provider.image', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), array(0 => 'jpg', 1 => 'png', 2 => 'jpeg'), array(0 => 'image/pjpeg', 1 => 'image/jpeg', 2 => 'image/png', 3 => 'image/x-png'), $this->get('sonata.media.adapter.image.gd'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_image.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('news_small', array('width' => 150, 'quality' => 95, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('news_big', array('width' => 500, 'quality' => 90, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.vimeo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\VimeoProvider A Sonata\MediaBundle\Provider\VimeoProvider instance.
     */
    protected function getSonata_Media_Provider_VimeoService()
    {
        $this->services['sonata.media.provider.vimeo'] = $instance = new \Sonata\MediaBundle\Provider\VimeoProvider('sonata.media.provider.vimeo', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'));

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_vimeo.html.twig'));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.provider.youtube' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Provider\YouTubeProvider A Sonata\MediaBundle\Provider\YouTubeProvider instance.
     */
    protected function getSonata_Media_Provider_YoutubeService()
    {
        $this->services['sonata.media.provider.youtube'] = $instance = new \Sonata\MediaBundle\Provider\YouTubeProvider('sonata.media.provider.youtube', $this->get('sonata.media.filesystem.local'), $this->get('sonata.media.cdn.server'), $this->get('sonata.media.generator.default'), $this->get('sonata.media.thumbnail.format'), $this->get('sonata.media.buzz.browser'), $this->get('sonata.media.metadata.proxy'), false);

        $instance->setTemplates(array('helper_thumbnail' => 'SonataMediaBundle:Provider:thumbnail.html.twig', 'helper_view' => 'SonataMediaBundle:Provider:view_youtube.html.twig'));
        $instance->addFormat('default_small', array('width' => 100, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('default_big', array('width' => 500, 'quality' => 70, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('news_small', array('width' => 150, 'quality' => 95, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->addFormat('news_big', array('width' => 500, 'quality' => 90, 'height' => false, 'format' => 'jpg', 'constraint' => true));
        $instance->setResizer($this->get('sonata.media.resizer.simple'));
        $instance->addFormat('admin', array('quality' => 80, 'width' => 100, 'format' => 'jpg', 'height' => false, 'constraint' => true));

        return $instance;
    }

    /**
     * Gets the 'sonata.media.resizer.simple' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Resizer\SimpleResizer A Sonata\MediaBundle\Resizer\SimpleResizer instance.
     */
    protected function getSonata_Media_Resizer_SimpleService()
    {
        return $this->services['sonata.media.resizer.simple'] = new \Sonata\MediaBundle\Resizer\SimpleResizer($this->get('sonata.media.adapter.image.gd'), 'inset', $this->get('sonata.media.metadata.proxy'));
    }

    /**
     * Gets the 'sonata.media.resizer.square' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Resizer\SquareResizer A Sonata\MediaBundle\Resizer\SquareResizer instance.
     */
    protected function getSonata_Media_Resizer_SquareService()
    {
        return $this->services['sonata.media.resizer.square'] = new \Sonata\MediaBundle\Resizer\SquareResizer($this->get('sonata.media.adapter.image.gd'), 'inset', $this->get('sonata.media.metadata.proxy'));
    }

    /**
     * Gets the 'sonata.media.security.connected_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\RolesDownloadStrategy A Sonata\MediaBundle\Security\RolesDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_ConnectedStrategyService()
    {
        return $this->services['sonata.media.security.connected_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy($this->get('translator'), $this->get('security.context'), array(0 => 'IS_AUTHENTICATED_FULLY', 1 => 'IS_AUTHENTICATED_REMEMBERED'));
    }

    /**
     * Gets the 'sonata.media.security.forbidden_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\ForbiddenDownloadStrategy A Sonata\MediaBundle\Security\ForbiddenDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_ForbiddenStrategyService()
    {
        return $this->services['sonata.media.security.forbidden_strategy'] = new \Sonata\MediaBundle\Security\ForbiddenDownloadStrategy($this->get('translator'));
    }

    /**
     * Gets the 'sonata.media.security.public_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\PublicDownloadStrategy A Sonata\MediaBundle\Security\PublicDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_PublicStrategyService()
    {
        return $this->services['sonata.media.security.public_strategy'] = new \Sonata\MediaBundle\Security\PublicDownloadStrategy($this->get('translator'));
    }

    /**
     * Gets the 'sonata.media.security.superadmin_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Security\RolesDownloadStrategy A Sonata\MediaBundle\Security\RolesDownloadStrategy instance.
     */
    protected function getSonata_Media_Security_SuperadminStrategyService()
    {
        return $this->services['sonata.media.security.superadmin_strategy'] = new \Sonata\MediaBundle\Security\RolesDownloadStrategy($this->get('translator'), $this->get('security.context'), array(0 => 'ROLE_SUPER_ADMIN', 1 => 'ROLE_ADMIN'));
    }

    /**
     * Gets the 'sonata.media.serializer.handler.gallery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Serializer\GallerySerializerHandler A Sonata\MediaBundle\Serializer\GallerySerializerHandler instance.
     */
    protected function getSonata_Media_Serializer_Handler_GalleryService()
    {
        return $this->services['sonata.media.serializer.handler.gallery'] = new \Sonata\MediaBundle\Serializer\GallerySerializerHandler($this->get('sonata.media.manager.gallery'));
    }

    /**
     * Gets the 'sonata.media.serializer.handler.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Serializer\MediaSerializerHandler A Sonata\MediaBundle\Serializer\MediaSerializerHandler instance.
     */
    protected function getSonata_Media_Serializer_Handler_MediaService()
    {
        return $this->services['sonata.media.serializer.handler.media'] = new \Sonata\MediaBundle\Serializer\MediaSerializerHandler($this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.thumbnail.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Thumbnail\FormatThumbnail A Sonata\MediaBundle\Thumbnail\FormatThumbnail instance.
     */
    protected function getSonata_Media_Thumbnail_FormatService()
    {
        return $this->services['sonata.media.thumbnail.format'] = new \Sonata\MediaBundle\Thumbnail\FormatThumbnail('jpg');
    }

    /**
     * Gets the 'sonata.media.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Twig\Extension\MediaExtension A Sonata\MediaBundle\Twig\Extension\MediaExtension instance.
     */
    protected function getSonata_Media_Twig_ExtensionService()
    {
        return $this->services['sonata.media.twig.extension'] = new \Sonata\MediaBundle\Twig\Extension\MediaExtension($this->get('sonata.media.pool'), $this->get('sonata.media.manager.media'));
    }

    /**
     * Gets the 'sonata.media.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Twig\GlobalVariables A Sonata\MediaBundle\Twig\GlobalVariables instance.
     */
    protected function getSonata_Media_Twig_GlobalService()
    {
        return $this->services['sonata.media.twig.global'] = new \Sonata\MediaBundle\Twig\GlobalVariables($this);
    }

    /**
     * Gets the 'sonata.media.validator.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\MediaBundle\Validator\FormatValidator A Sonata\MediaBundle\Validator\FormatValidator instance.
     */
    protected function getSonata_Media_Validator_FormatService()
    {
        return $this->services['sonata.media.validator.format'] = new \Sonata\MediaBundle\Validator\FormatValidator($this->get('sonata.media.pool'));
    }

    /**
     * Gets the 'sonata.news.admin.comment' service.
     *
     * @return \Sonata\NewsBundle\Admin\CommentAdmin A Sonata\NewsBundle\Admin\CommentAdmin instance.
     */
    protected function getSonata_News_Admin_CommentService()
    {
        $instance = new \Sonata\NewsBundle\Admin\CommentAdmin('sonata.news.admin.comment', 'Application\\Sonata\\NewsBundle\\Entity\\Comment', 'SonataNewsBundle:CommentAdmin');

        $instance->setTranslationDomain('SonataNewsBundle');
        $instance->setCommentManager($this->get('sonata.news.manager.comment'));
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('comments');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataNewsBundle:Admin:inner_row_comment.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_flat_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.news.admin.post' service.
     *
     * @return \Sonata\NewsBundle\Admin\PostAdmin A Sonata\NewsBundle\Admin\PostAdmin instance.
     */
    protected function getSonata_News_Admin_PostService()
    {
        $a = $this->get('sonata.news.manager.comment');
        $b = $this->get('sonata.admin.label.strategy.underscore');
        $c = $this->get('sonata.admin.manager.orm');
        $d = $this->get('sonata.admin.builder.orm_form');
        $e = $this->get('sonata.admin.builder.orm_show');
        $f = $this->get('sonata.admin.builder.orm_list');
        $g = $this->get('sonata.admin.builder.orm_datagrid');
        $h = $this->get('translator');
        $i = $this->get('sonata.admin.pool');
        $j = $this->get('sonata.admin.route.default_generator');
        $k = $this->get('validator');
        $l = $this->get('sonata.admin.security.handler');
        $m = $this->get('knp_menu.factory');
        $n = $this->get('sonata.admin.route.path_info');
        $o = $this->get('sonata.admin.event.extension');

        $p = new \Sonata\NewsBundle\Admin\CommentAdmin('sonata.news.admin.comment', 'Application\\Sonata\\NewsBundle\\Entity\\Comment', 'SonataNewsBundle:CommentAdmin');
        $p->setTranslationDomain('SonataNewsBundle');
        $p->setCommentManager($a);
        $p->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $p->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $p->setLabelTranslatorStrategy($b);
        $p->setManagerType('orm');
        $p->setModelManager($c);
        $p->setFormContractor($d);
        $p->setShowBuilder($e);
        $p->setListBuilder($f);
        $p->setDatagridBuilder($g);
        $p->setTranslator($h);
        $p->setConfigurationPool($i);
        $p->setRouteGenerator($j);
        $p->setValidator($k);
        $p->setSecurityHandler($l);
        $p->setMenuFactory($m);
        $p->setRouteBuilder($n);
        $p->setLabel('comments');
        $p->setPersistFilters(false);
        $p->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataNewsBundle:Admin:inner_row_comment.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_flat_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $p->setSecurityInformation(array());
        $p->initialize();
        $p->addExtension($o);

        $instance = new \Sonata\NewsBundle\Admin\PostAdmin('sonata.news.admin.post', 'Application\\Sonata\\NewsBundle\\Entity\\Post', 'SonataAdminBundle:CRUD');

        $instance->setUserManager($this->get('fos_user.user_manager'));
        $instance->setPoolFormatter($this->get('sonata.formatter.pool'));
        $instance->addChild($p);
        $instance->setTranslationDomain('SonataNewsBundle');
        $instance->setCommentManager($a);
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($b);
        $instance->setManagerType('orm');
        $instance->setModelManager($c);
        $instance->setFormContractor($d);
        $instance->setShowBuilder($e);
        $instance->setListBuilder($f);
        $instance->setDatagridBuilder($g);
        $instance->setTranslator($h);
        $instance->setConfigurationPool($i);
        $instance->setRouteGenerator($j);
        $instance->setValidator($k);
        $instance->setSecurityHandler($l);
        $instance->setMenuFactory($m);
        $instance->setRouteBuilder($n);
        $instance->setLabel('posts');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($o);

        return $instance;
    }

    /**
     * Gets the 'sonata.news.block.breadcrumb_archive' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Block\Breadcrumb\NewsArchiveBreadcrumbBlockService A Sonata\NewsBundle\Block\Breadcrumb\NewsArchiveBreadcrumbBlockService instance.
     */
    protected function getSonata_News_Block_BreadcrumbArchiveService()
    {
        return $this->services['sonata.news.block.breadcrumb_archive'] = new \Sonata\NewsBundle\Block\Breadcrumb\NewsArchiveBreadcrumbBlockService('news_archive', 'sonata.news.block.breadcrumb_archive', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('knp_menu.factory'));
    }

    /**
     * Gets the 'sonata.news.block.breadcrumb_post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Block\Breadcrumb\NewsPostBreadcrumbBlockService A Sonata\NewsBundle\Block\Breadcrumb\NewsPostBreadcrumbBlockService instance.
     */
    protected function getSonata_News_Block_BreadcrumbPostService()
    {
        return $this->services['sonata.news.block.breadcrumb_post'] = new \Sonata\NewsBundle\Block\Breadcrumb\NewsPostBreadcrumbBlockService('news_post', 'sonata.news.block.breadcrumb_post', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('knp_menu.factory'), $this->get('sonata.news.blog'));
    }

    /**
     * Gets the 'sonata.news.block.recent_comments' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Block\RecentCommentsBlockService A Sonata\NewsBundle\Block\RecentCommentsBlockService instance.
     */
    protected function getSonata_News_Block_RecentCommentsService()
    {
        return $this->services['sonata.news.block.recent_comments'] = new \Sonata\NewsBundle\Block\RecentCommentsBlockService('sonata.news.block.recent_comments', $this->get('templating'), $this->get('sonata.news.manager.comment'));
    }

    /**
     * Gets the 'sonata.news.block.recent_posts' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Block\RecentPostsBlockService A Sonata\NewsBundle\Block\RecentPostsBlockService instance.
     */
    protected function getSonata_News_Block_RecentPostsService()
    {
        return $this->services['sonata.news.block.recent_posts'] = new \Sonata\NewsBundle\Block\RecentPostsBlockService('sonata.news.block.recent_posts', $this->get('templating'), $this->get('sonata.news.manager.post'));
    }

    /**
     * Gets the 'sonata.news.blog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Model\Blog A Sonata\NewsBundle\Model\Blog instance.
     */
    protected function getSonata_News_BlogService()
    {
        return $this->services['sonata.news.blog'] = new \Sonata\NewsBundle\Model\Blog('Sonata Project', 'http://localhost/tecOne/tec/web/app_dev.php', 'Cool bundles on top of Symfony2', $this->get('sonata.news.permalink.date'));
    }

    /**
     * Gets the 'sonata.news.form.type.comment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Form\Type\CommentType A Sonata\NewsBundle\Form\Type\CommentType instance.
     */
    protected function getSonata_News_Form_Type_CommentService()
    {
        return $this->services['sonata.news.form.type.comment'] = new \Sonata\NewsBundle\Form\Type\CommentType();
    }

    /**
     * Gets the 'sonata.news.hash.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Util\HashGenerator A Sonata\NewsBundle\Util\HashGenerator instance.
     */
    protected function getSonata_News_Hash_GeneratorService()
    {
        return $this->services['sonata.news.hash.generator'] = new \Sonata\NewsBundle\Util\HashGenerator('secureToken');
    }

    /**
     * Gets the 'sonata.news.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Mailer\Mailer A Sonata\NewsBundle\Mailer\Mailer instance.
     */
    protected function getSonata_News_MailerService()
    {
        return $this->services['sonata.news.mailer'] = new \Sonata\NewsBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('sonata.news.blog'), $this->get('sonata.news.hash.generator'), $this->get('router'), $this->get('templating'), array('notification' => array('emails' => array(0 => 'email@example.org', 1 => 'email2@example.org'), 'from' => 'no-reply@sonata-project.org', 'template' => 'SonataNewsBundle:Mail:comment_notification.txt.twig')));
    }

    /**
     * Gets the 'sonata.news.manager.comment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Entity\CommentManager A Sonata\NewsBundle\Entity\CommentManager instance.
     */
    protected function getSonata_News_Manager_CommentService()
    {
        return $this->services['sonata.news.manager.comment'] = new \Sonata\NewsBundle\Entity\CommentManager('Application\\Sonata\\NewsBundle\\Entity\\Comment', $this->get('doctrine'), $this->get('sonata.news.manager.post'));
    }

    /**
     * Gets the 'sonata.news.manager.post' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Entity\PostManager A Sonata\NewsBundle\Entity\PostManager instance.
     */
    protected function getSonata_News_Manager_PostService()
    {
        return $this->services['sonata.news.manager.post'] = new \Sonata\NewsBundle\Entity\PostManager('Application\\Sonata\\NewsBundle\\Entity\\Post', $this->get('doctrine'));
    }

    /**
     * Gets the 'sonata.news.permalink.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Permalink\CollectionPermalink A Sonata\NewsBundle\Permalink\CollectionPermalink instance.
     */
    protected function getSonata_News_Permalink_CollectionService()
    {
        return $this->services['sonata.news.permalink.collection'] = new \Sonata\NewsBundle\Permalink\CollectionPermalink();
    }

    /**
     * Gets the 'sonata.news.permalink.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\NewsBundle\Permalink\DatePermalink A Sonata\NewsBundle\Permalink\DatePermalink instance.
     */
    protected function getSonata_News_Permalink_DateService()
    {
        return $this->services['sonata.news.permalink.date'] = new \Sonata\NewsBundle\Permalink\DatePermalink('%1$04d/%2$d/%3$d/%4$s');
    }

    /**
     * Gets the 'sonata.user.admin.group' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\GroupAdmin A Sonata\UserBundle\Admin\Entity\GroupAdmin instance.
     */
    protected function getSonata_User_Admin_GroupService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'Application\\Sonata\\UserBundle\\Entity\\Group', 'SonataAdminBundle:CRUD');

        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('groups');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.user.admin.user' service.
     *
     * @return \Sonata\UserBundle\Admin\Entity\UserAdmin A Sonata\UserBundle\Admin\Entity\UserAdmin instance.
     */
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\UserAdmin('sonata.user.admin.user', 'Application\\Sonata\\UserBundle\\Entity\\User', 'SonataAdminBundle:CRUD');

        $instance->setUserManager($this->get('fos_user.user_manager'));
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('users');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig', 'add_block' => 'SonataAdminBundle:Core:add_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->addExtension($this->get('sonata.admin.event.extension'));

        return $instance;
    }

    /**
     * Gets the 'sonata.user.block.account' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Block\AccountBlockService A Sonata\UserBundle\Block\AccountBlockService instance.
     */
    protected function getSonata_User_Block_AccountService()
    {
        return $this->services['sonata.user.block.account'] = new \Sonata\UserBundle\Block\AccountBlockService('sonata.user.block.account', $this->get('templating'), $this->get('security.context'));
    }

    /**
     * Gets the 'sonata.user.block.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Block\ProfileMenuBlockService A Sonata\UserBundle\Block\ProfileMenuBlockService instance.
     */
    protected function getSonata_User_Block_MenuService()
    {
        return $this->services['sonata.user.block.menu'] = new \Sonata\UserBundle\Block\ProfileMenuBlockService('sonata.user.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('sonata.user.profile.menu_builder'));
    }

    /**
     * Gets the 'sonata.user.editable_role_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Security\EditableRolesBuilder A Sonata\UserBundle\Security\EditableRolesBuilder instance.
     */
    protected function getSonata_User_EditableRoleBuilderService()
    {
        return $this->services['sonata.user.editable_role_builder'] = new \Sonata\UserBundle\Security\EditableRolesBuilder($this->get('security.context'), $this->get('sonata.admin.pool'), array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH'), 'SONATA' => array(0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT')));
    }

    /**
     * Gets the 'sonata.user.form.gender_list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\CoreBundle\Form\Type\StatusType A Sonata\CoreBundle\Form\Type\StatusType instance.
     */
    protected function getSonata_User_Form_GenderListService()
    {
        return $this->services['sonata.user.form.gender_list'] = new \Sonata\CoreBundle\Form\Type\StatusType('Application\\Sonata\\UserBundle\\Entity\\User', 'getGenderList', 'sonata_user_gender');
    }

    /**
     * Gets the 'sonata.user.form.type.security_roles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Form\Type\SecurityRolesType A Sonata\UserBundle\Form\Type\SecurityRolesType instance.
     */
    protected function getSonata_User_Form_Type_SecurityRolesService()
    {
        return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($this->get('sonata.user.editable_role_builder'));
    }

    /**
     * Gets the 'sonata.user.google.authenticator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Google\Authenticator\GoogleAuthenticator A Google\Authenticator\GoogleAuthenticator instance.
     */
    protected function getSonata_User_Google_AuthenticatorService()
    {
        return $this->services['sonata.user.google.authenticator'] = new \Google\Authenticator\GoogleAuthenticator();
    }

    /**
     * Gets the 'sonata.user.google.authenticator.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\GoogleAuthenticator\InteractiveLoginListener A Sonata\UserBundle\GoogleAuthenticator\InteractiveLoginListener instance.
     */
    protected function getSonata_User_Google_Authenticator_InteractiveLoginListenerService()
    {
        return $this->services['sonata.user.google.authenticator.interactive_login_listener'] = new \Sonata\UserBundle\GoogleAuthenticator\InteractiveLoginListener($this->get('sonata.user.google.authenticator.provider'));
    }

    /**
     * Gets the 'sonata.user.google.authenticator.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\GoogleAuthenticator\Helper A Sonata\UserBundle\GoogleAuthenticator\Helper instance.
     */
    protected function getSonata_User_Google_Authenticator_ProviderService()
    {
        return $this->services['sonata.user.google.authenticator.provider'] = new \Sonata\UserBundle\GoogleAuthenticator\Helper('gmail.com', $this->get('sonata.user.google.authenticator'));
    }

    /**
     * Gets the 'sonata.user.google.authenticator.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\GoogleAuthenticator\RequestListener A Sonata\UserBundle\GoogleAuthenticator\RequestListener instance.
     */
    protected function getSonata_User_Google_Authenticator_RequestListenerService()
    {
        return $this->services['sonata.user.google.authenticator.request_listener'] = new \Sonata\UserBundle\GoogleAuthenticator\RequestListener($this->get('sonata.user.google.authenticator.provider'), $this->get('security.context'), $this->get('templating'));
    }

    /**
     * Gets the 'sonata.user.profile.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Form A Symfony\Component\Form\Form instance.
     */
    protected function getSonata_User_Profile_FormService()
    {
        return $this->services['sonata.user.profile.form'] = $this->get('form.factory')->createNamed('sonata_user_profile_form', 'sonata_user_profile', NULL, array('validation_groups' => array(0 => 'Profile'), 'translation_domain' => 'SonataUserBundle'));
    }

    /**
     * Gets the 'sonata.user.profile.form.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Form\Handler\ProfileFormHandler A Sonata\UserBundle\Form\Handler\ProfileFormHandler instance.
     * 
     * @throws InactiveScopeException when the 'sonata.user.profile.form.handler' service is requested while the 'request' scope is not active
     */
    protected function getSonata_User_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.profile.form.handler', 'request');
        }

        return $this->services['sonata.user.profile.form.handler'] = $this->scopedServices['request']['sonata.user.profile.form.handler'] = new \Sonata\UserBundle\Form\Handler\ProfileFormHandler($this->get('sonata.user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'sonata.user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Form\Type\ProfileType A Sonata\UserBundle\Form\Type\ProfileType instance.
     */
    protected function getSonata_User_Profile_Form_TypeService()
    {
        return $this->services['sonata.user.profile.form.type'] = new \Sonata\UserBundle\Form\Type\ProfileType('Application\\Sonata\\UserBundle\\Entity\\User');
    }

    /**
     * Gets the 'sonata.user.profile.menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Menu\ProfileMenuBuilder A Sonata\UserBundle\Menu\ProfileMenuBuilder instance.
     */
    protected function getSonata_User_Profile_MenuBuilderService()
    {
        return $this->services['sonata.user.profile.menu_builder'] = new \Sonata\UserBundle\Menu\ProfileMenuBuilder($this->get('knp_menu.factory'), $this->get('translator'), array(0 => array('route' => 'sonata_user_profile_show', 'label' => 'sonata_profile_title', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 1 => array('route' => 'sonata_user_profile_edit', 'label' => 'link_edit_profile', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 2 => array('route' => 'sonata_user_profile_edit', 'label' => 'link_edit_profile', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 3 => array('route' => 'produit_ajout', 'label' => 'Ajouter un Produit ', 'domain' => 'ProduitBundle', 'route_parameters' => array()), 4 => array('route' => 'produit_listerP', 'label' => 'Mes Produit ', 'domain' => 'ProduitBundle', 'route_parameters' => array()), 5 => array('route' => 'service_ajout', 'label' => 'Ajouter un service ', 'domain' => 'ServiceBundle', 'route_parameters' => array()), 6 => array('route' => 'service_mesService', 'label' => 'Mes Services ', 'domain' => 'ServiceBundle', 'route_parameters' => array()), 7 => array('route' => 'sonata_user_profile_edit_authentication', 'label' => 'link_edit_authentication', 'domain' => 'SonataUserBundle', 'route_parameters' => array())), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'sonata.user.twig.global' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sonata\UserBundle\Twig\GlobalVariables A Sonata\UserBundle\Twig\GlobalVariables instance.
     */
    protected function getSonata_User_Twig_GlobalService()
    {
        return $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this);
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('lilya.thebti@esprit.tn');
        $a->setPassword('lilya11369379');
        $a->setAuthMode('login');

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('smtp.gmail.com');
        $instance->setPort(465);
        $instance->setEncryption('ssl');
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, $this->targetDirs[2], 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper instance.
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\LoggingTranslator A Symfony\Component\Translation\LoggingTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation'));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true));

        $instance->setFallbackLocales(array(0 => 'fr'));
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf'), 'af', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf'), 'cy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 'no', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf'), 'sq', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 'th', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 'tr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 'vi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 'lv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ar.xlf'), 'ar', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.az.xlf'), 'az', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.bg.xlf'), 'bg', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ca.xlf'), 'ca', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.cs.xlf'), 'cs', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.da.xlf'), 'da', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.de.xlf'), 'de', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.el.xlf'), 'el', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.en.xlf'), 'en', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.es.xlf'), 'es', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fa.xlf'), 'fa', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fr.xlf'), 'fr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.gl.xlf'), 'gl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.he.xlf'), 'he', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hr.xlf'), 'hr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hu.xlf'), 'hu', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.id.xlf'), 'id', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.it.xlf'), 'it', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ja.xlf'), 'ja', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lb.xlf'), 'lb', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lt.xlf'), 'lt', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.nl.xlf'), 'nl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.no.xlf'), 'no', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pl.xlf'), 'pl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_BR.xlf'), 'pt_BR', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_PT.xlf'), 'pt_PT', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ro.xlf'), 'ro', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ru.xlf'), 'ru', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sk.xlf'), 'sk', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sl.xlf'), 'sl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Cyrl.xlf'), 'sr_Cyrl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Latn.xlf'), 'sr_Latn', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sv.xlf'), 'sv', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.th.xlf'), 'th', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.tr.xlf'), 'tr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ua.xlf'), 'ua', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.vi.xlf'), 'vi', 'security');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.zh_CN.xlf'), 'zh_CN', 'security');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.ar.xliff'), 'ar', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.bg.xliff'), 'bg', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.ca.xliff'), 'ca', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.cs.xliff'), 'cs', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.de.xliff'), 'de', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.en.xliff'), 'en', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.es.xliff'), 'es', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.eu.xliff'), 'eu', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.fa.xliff'), 'fa', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.fi.xliff'), 'fi', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.fr.xliff'), 'fr', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.hr.xliff'), 'hr', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.hu.xliff'), 'hu', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.it.xliff'), 'it', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.ja.xliff'), 'ja', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.lb.xliff'), 'lb', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.lt.xliff'), 'lt', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.nl.xliff'), 'nl', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.pl.xliff'), 'pl', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.pt.xliff'), 'pt', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.pt_BR.xliff'), 'pt_BR', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.ro.xliff'), 'ro', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.ru.xliff'), 'ru', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.sk.xliff'), 'sk', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.sl.xliff'), 'sl', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.uk.xliff'), 'uk', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/translations\\SonataCoreBundle.zh_CN.xliff'), 'zh_CN', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.ar.xliff'), 'ar', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.bg.xliff'), 'bg', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.ca.xliff'), 'ca', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.cs.xliff'), 'cs', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.de.xliff'), 'de', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.en.xliff'), 'en', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.es.xliff'), 'es', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.eu.xliff'), 'eu', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.fa.xliff'), 'fa', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.fr.xliff'), 'fr', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.hr.xliff'), 'hr', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.hu.xliff'), 'hu', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.it.xliff'), 'it', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.ja.xliff'), 'ja', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.lb.xliff'), 'lb', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.lt.xliff'), 'lt', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.nl.xliff'), 'nl', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.pl.xliff'), 'pl', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.pt.xliff'), 'pt', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.pt_BR.xliff'), 'pt_BR', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.ro.xliff'), 'ro', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.ru.xliff'), 'ru', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.sk.xliff'), 'sk', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.sl.xliff'), 'sl', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.uk.xliff'), 'uk', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/translations\\SonataAdminBundle.zh_CN.xliff'), 'zh_CN', 'SonataAdminBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.bg.yml'), 'bg', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ca.yml'), 'ca', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.cs.yml'), 'cs', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.da.yml'), 'da', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.de.yml'), 'de', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.en.yml'), 'en', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.es.yml'), 'es', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.et.yml'), 'et', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.eu.yml'), 'eu', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fa.yml'), 'fa', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fi.yml'), 'fi', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fr.yml'), 'fr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hr.yml'), 'hr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hu.yml'), 'hu', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.it.yml'), 'it', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ja.yml'), 'ja', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lb.yml'), 'lb', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lt.yml'), 'lt', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lv.yml'), 'lv', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.nl.yml'), 'nl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pl.yml'), 'pl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_BR.yml'), 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_PT.yml'), 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ro.yml'), 'ro', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ru.yml'), 'ru', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sk.yml'), 'sk', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sl.yml'), 'sl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sr_Latn.yml'), 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sv.yml'), 'sv', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.tr.yml'), 'tr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.uk.yml'), 'uk', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.zh_CN.yml'), 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.bg.yml'), 'bg', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.cs.yml'), 'cs', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.da.yml'), 'da', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.es.yml'), 'es', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.eu.yml'), 'eu', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fa.yml'), 'fa', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fi.yml'), 'fi', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fr.yml'), 'fr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hr.yml'), 'hr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hu.yml'), 'hu', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ja.yml'), 'ja', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lt.yml'), 'lt', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lv.yml'), 'lv', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pl.yml'), 'pl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt.yml'), 'pt', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt_BR.yml'), 'pt_BR', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ru.yml'), 'ru', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sk.yml'), 'sk', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sl.yml'), 'sl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sr_Latn.yml'), 'sr_Latn', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sv.yml'), 'sv', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.tr.yml'), 'tr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.uk.yml'), 'uk', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.zh_CN.yml'), 'zh_CN', 'validators');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.bg.xliff'), 'bg', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.ca.xliff'), 'ca', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.cs.xliff'), 'cs', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.de.xliff'), 'de', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.en.xliff'), 'en', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.es.xliff'), 'es', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.fa.xliff'), 'fa', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.fr.xliff'), 'fr', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.it.xliff'), 'it', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.lt.xliff'), 'lt', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.nl.xliff'), 'nl', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.pl.xliff'), 'pl', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.pt.xliff'), 'pt', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.pt_BR.xliff'), 'pt_BR', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.ru.xliff'), 'ru', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.sk.xliff'), 'sk', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.sl.xliff'), 'sl', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/translations\\SonataUserBundle.zh_TW.xliff'), 'zh_TW', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle/Resources/translations\\SonataClassificationBundle.en.xliff'), 'en', 'SonataClassificationBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle/Resources/translations\\SonataClassificationBundle.fr.xliff'), 'fr', 'SonataClassificationBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle/Resources/translations\\SonataClassificationBundle.it.xliff'), 'it', 'SonataClassificationBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle/Resources/translations\\SonataClassificationBundle.nl.xliff'), 'nl', 'SonataClassificationBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.cs.xliff'), 'cs', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.de.xliff'), 'de', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.en.xliff'), 'en', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.fr.xliff'), 'fr', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.pl.xliff'), 'pl', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.ru.xliff'), 'ru', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.sk.xliff'), 'sk', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/translations\\SonataFormatterBundle.sl.xliff'), 'sl', 'SonataFormatterBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.bg.xliff'), 'bg', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.de.xliff'), 'de', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.en.xliff'), 'en', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.es.xliff'), 'es', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.fr.xliff'), 'fr', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.hu.xliff'), 'hu', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.it.xliff'), 'it', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.lt.xliff'), 'lt', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.nl.xliff'), 'nl', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.pl.xliff'), 'pl', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.pt_BR.xliff'), 'pt_BR', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.ru.xliff'), 'ru', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/translations\\SonataMediaBundle.sl.xliff'), 'sl', 'SonataMediaBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.cs.xliff'), 'cs', 'SonataNewsBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.de.xliff'), 'de', 'SonataNewsBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.en.xliff'), 'en', 'SonataNewsBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.es.xliff'), 'es', 'SonataNewsBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.fr.xliff'), 'fr', 'SonataNewsBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.ru.xliff'), 'ru', 'SonataNewsBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.sk.xliff'), 'sk', 'SonataNewsBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/translations\\SonataNewsBundle.sl.xliff'), 'sl', 'SonataNewsBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.bg.yml'), 'bg', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.cs.yml'), 'cs', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.da.yml'), 'da', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.de.yml'), 'de', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.en.yml'), 'en', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.es.yml'), 'es', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.et.yml'), 'et', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.fa_IR.yml'), 'fa_IR', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.fi.yml'), 'fi', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.fr.yml'), 'fr', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.hu.yml'), 'hu', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.it.yml'), 'it', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.ja.yml'), 'ja', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.mn.yml'), 'mn', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.nl.yml'), 'nl', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.pl.yml'), 'pl', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.pt.yml'), 'pt', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.ru.yml'), 'ru', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.sl.yml'), 'sl', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.sr_Cyrl.yml'), 'sr_Cyrl', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.sr_Latn.yml'), 'sr_Latn', 'FOSCommentBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/translations\\FOSCommentBundle.zh_CN.yml'), 'zh_CN', 'FOSCommentBundle');
        $instance->addResource('xlf', ($this->targetDirs[3].'\\src\\Application\\EcommerceBundle/Resources/translations\\messages.fr.xlf'), 'fr', 'messages');

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance.
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('router');
        $b = $this->get('markdown.parser');

        $c = new \Knp\Bundle\MarkdownBundle\Helper\MarkdownHelper($b);
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Min(), 'min');
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light(), 'light');
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Medium(), 'medium');
        $c->addParser($b, 'default');
        $c->addParser(new \Knp\Bundle\MarkdownBundle\Parser\Preset\Flavored(), 'flavored');

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'SonataMediaBundle:Form:media_widgets.html.twig'), 'autoescape' => array(0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy', 1 => 'guess'), 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'SonataMediaBundle:Form:media_widgets.html.twig', 3 => 'SonataUserBundle:Form:form_admin_fields.html.twig', 4 => 'IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'FOSCommentBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('sonata.core.flashmessage.twig.extension'));
        $instance->addExtension($this->get('sonata.core.twig.extension.wrapping'));
        $instance->addExtension($this->get('sonata.core.twig.extension.text'));
        $instance->addExtension($this->get('sonata.core.twig.status_extension'));
        $instance->addExtension($this->get('sonata.core.twig.template_extension'));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension(new \Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension($c));
        $instance->addExtension($this->get('ivory_ck_editor.twig_extension'));
        $instance->addExtension(new \Sonata\FormatterBundle\Twig\Extension\TextFormatterExtension($this->get('sonata.formatter.pool')));
        $instance->addExtension($this->get('sonata.media.twig.extension'));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\LocaleExtension($this->get('sonata.intl.templating.helper.locale')));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\NumberExtension($this->get('sonata.intl.templating.helper.number')));
        $instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\DateTimeExtension($this->get('sonata.intl.templating.helper.datetime')));
        $instance->addExtension(new \Sonata\NewsBundle\Twig\Extension\NewsExtension($a, $this->get('sonata.classification.manager.tag'), $this->get('sonata.news.blog')));
        $instance->addExtension(new \FOS\CommentBundle\Twig\CommentExtension(NULL, NULL, NULL));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension(new \Ivory\GoogleMapBundle\Twig\GoogleMapExtension($this->get('ivory_google_map.template.helper')));
        $instance->addExtension($this->get('twig.extension.nomaya_social_bar'));
        $instance->addExtension($this->get('twig.extension.nomaya_social_links'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension($this->get('twig.extension.acme.demo'));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        $instance->addGlobal('sonata_user', $this->get('sonata.user.twig.global'));
        $instance->addGlobal('sonata_media', $this->get('sonata.media.twig.global'));

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.nomaya_social_bar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar A Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar instance.
     */
    protected function getTwig_Extension_NomayaSocialBarService()
    {
        $this->services['twig.extension.nomaya_social_bar'] = $instance = new \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar($this);

        $instance->setNetworks(array(0 => 'facebook', 1 => 'twitter', 2 => 'googleplus', 3 => 'linkedin', 4 => 'pinterest'));

        return $instance;
    }

    /**
     * Gets the 'twig.extension.nomaya_social_links' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks A Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks instance.
     */
    protected function getTwig_Extension_NomayaSocialLinksService()
    {
        return $this->services['twig.extension.nomaya_social_links'] = new \Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialLinks($this);
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\user-bundle/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\UserBundle/Resources/views'), 'ApplicationSonataUser');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\ClassificationBundle/Resources/views'), 'ApplicationSonataClassification');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\egeloen\\ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\formatter-bundle/Resources/views'), 'SonataFormatter');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle/Resources/views'), 'SonataMedia');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\MediaBundle/Resources/views'), 'ApplicationSonataMedia');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle/Resources/views'), 'SonataIntl');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle/Resources/views'), 'SonataNews');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\Sonata\\NewsBundle/Resources/views'), 'ApplicationSonataNews');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\ServiceBundle/Resources/views'), 'Service');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\ProduitBundle/Resources/views'), 'Produit');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle/Resources/views'), 'FOSComment');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\MailBundle/Resources/views'), 'ApplicationMail');
        $instance->addPath(($this->targetDirs[3].'\\src\\Application\\EcommerceBundle/Resources/views'), 'Ecommerce');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\egeloen\\google-map-bundle/Resources/views'), 'IvoryGoogleMap');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views'), 'NomayaSocial');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'\\src\\Acme\\DemoBundle/Resources/views'), 'AcmeDemo');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views'), 'SensioDistribution');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorInterface A Symfony\Component\Validator\ValidatorInterface instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance.
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory($this->get('validator.validator_factory'));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml'), 2 => ($this->targetDirs[3].'\\vendor\\sonata-project\\classification-bundle\\Resources\\config\\validation.xml'), 3 => ($this->targetDirs[3].'\\vendor\\sonata-project\\media-bundle\\Resources\\config\\validation.xml'), 4 => ($this->targetDirs[3].'\\vendor\\sonata-project\\news-bundle\\Resources\\config\\validation.xml'), 5 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\comment-bundle\\FOS\\CommentBundle\\Resources\\config\\validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setApiVersion(3);
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
        $instance->addXmlMapping(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\DependencyInjection\\Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance.
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance.
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance.
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'sonata.block.data_collector' => array(0 => 'block', 1 => 'SonataBlockBundle:Profiler:block.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'fos_comment.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getFosComment_EntityManagerService()
    {
        return $this->services['fos_comment.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the 'fos_user.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the 'ivory_google_map.helper.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Ivory\GoogleMap\Helper\ApiHelper A Ivory\GoogleMap\Helper\ApiHelper instance.
     */
    protected function getIvoryGoogleMap_Helper_ApiService()
    {
        return $this->services['ivory_google_map.helper.api'] = new \Ivory\GoogleMap\Helper\ApiHelper();
    }

    /**
     * Gets the 'ivory_google_map.helper.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Ivory\GoogleMap\Helper\Base\BoundHelper A Ivory\GoogleMap\Helper\Base\BoundHelper instance.
     */
    protected function getIvoryGoogleMap_Helper_BoundService()
    {
        return $this->services['ivory_google_map.helper.bound'] = new \Ivory\GoogleMap\Helper\Base\BoundHelper($this->get('ivory_google_map.helper.coordinate'));
    }

    /**
     * Gets the 'ivory_google_map.helper.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Ivory\GoogleMap\Helper\Base\CoordinateHelper A Ivory\GoogleMap\Helper\Base\CoordinateHelper instance.
     */
    protected function getIvoryGoogleMap_Helper_CoordinateService()
    {
        return $this->services['ivory_google_map.helper.coordinate'] = new \Ivory\GoogleMap\Helper\Base\CoordinateHelper();
    }

    /**
     * Gets the 'ivory_google_map.places_autocomplete.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Ivory\GoogleMap\Helper\Places\AutocompleteHelper A Ivory\GoogleMap\Helper\Places\AutocompleteHelper instance.
     */
    protected function getIvoryGoogleMap_PlacesAutocomplete_HelperService()
    {
        return $this->services['ivory_google_map.places_autocomplete.helper'] = new \Ivory\GoogleMap\Helper\Places\AutocompleteHelper($this->get('ivory_google_map.helper.api'), $this->get('ivory_google_map.helper.coordinate'), $this->get('ivory_google_map.helper.bound'));
    }

    /**
     * Gets the 'jms_serializer.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

        $instance->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        return $instance;
    }

    /**
     * Gets the 'jms_serializer.unserialize_object_constructor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor A JMS\Serializer\Construction\UnserializeObjectConstructor instance.
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');
        $c = $this->get('security.acl.provider');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $e = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy();

        $f = new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy($a, $b);

        $g = new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap();

        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b), 3 => new \Sonata\UserBundle\Security\Authorization\Voter\UserAclVoter($c, $e, $f, $g, $d), 4 => new \Symfony\Component\Security\Acl\Voter\AclVoter($c, $e, $f, $g, $d, true)), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.access_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener A Symfony\Component\Security\Http\Firewall\AccessListener instance.
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance.
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login_check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/produit/ajout'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/produit/supprimerP/$'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/produit/modifierP/$'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/produit/listerP'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^produit/afficheP'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^produit/affichePS'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/service/ajout'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/service/supprimer$'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/service/modifier$'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/service/mesService$'), array(0 => 'ROLE_USER'), NULL);

        return $instance;
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_manager');
        $b = $this->get('security.user_checker');
        $c = $this->get('security.encoder_factory');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'admin', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('574f1c216b39c5.10212588'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('574f1c216b39c5.10212588')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance.
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.channel_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener A Symfony\Component\Security\Http\Firewall\ChannelListener instance.
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.context_listener.0' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener A Symfony\Component\Security\Http\Firewall\ContextListener instance.
     */
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->services['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener($this->get('security.context'), array(0 => $this->get('fos_user.user_manager')), 'user', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance.
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the 'security.logout.handler.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\SessionLogoutHandler A Symfony\Component\Security\Http\Logout\SessionLogoutHandler instance.
     */
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH'), 'SONATA' => array(0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT')));
    }

    /**
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance.
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'sonata.block.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sonata\BlockBundle\Block\BlockServiceManager A Sonata\BlockBundle\Block\BlockServiceManager instance.
     */
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, true, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array(0 => 'cms'));
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array(0 => 'admin'));
        $instance->add('sonata.user.block.menu', 'sonata.user.block.menu', array(0 => 'admin'));
        $instance->add('sonata.user.block.account', 'sonata.user.block.account', array());
        $instance->add('sonata.formatter.block.formatter', 'sonata.formatter.block.formatter', array());
        $instance->add('sonata.media.block.media', 'sonata.media.block.media', array());
        $instance->add('sonata.media.block.feature_media', 'sonata.media.block.feature_media', array());
        $instance->add('sonata.media.block.gallery', 'sonata.media.block.gallery', array());
        $instance->add('sonata.news.block.recent_posts', 'sonata.news.block.recent_posts', array());
        $instance->add('sonata.news.block.recent_comments', 'sonata.news.block.recent_comments', array());
        $instance->add('sonata.news.block.breadcrumb_archive', 'sonata.news.block.breadcrumb_archive', array());
        $instance->add('sonata.news.block.breadcrumb_post', 'sonata.news.block.breadcrumb_post', array());

        return $instance;
    }

    /**
     * Gets the 'sonata.formatter.twig.env.markdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getSonata_Formatter_Twig_Env_MarkdownService()
    {
        $this->services['sonata.formatter.twig.env.markdown'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_String(), $this->get('twig.loader')), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension($this->get('sonata.formatter.twig.control_flow'));
        $instance->addExtension($this->get('sonata.formatter.twig.gist'));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /**
     * Gets the 'sonata.formatter.twig.env.rawhtml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getSonata_Formatter_Twig_Env_RawhtmlService()
    {
        $this->services['sonata.formatter.twig.env.rawhtml'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_String(), $this->get('twig.loader')), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension($this->get('sonata.formatter.twig.control_flow'));
        $instance->addExtension($this->get('sonata.formatter.twig.gist'));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /**
     * Gets the 'sonata.formatter.twig.env.richhtml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getSonata_Formatter_Twig_Env_RichhtmlService()
    {
        $this->services['sonata.formatter.twig.env.richhtml'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_String(), $this->get('twig.loader')), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension($this->get('sonata.formatter.twig.control_flow'));
        $instance->addExtension($this->get('sonata.formatter.twig.gist'));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /**
     * Gets the 'sonata.formatter.twig.env.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getSonata_Formatter_Twig_Env_TextService()
    {
        $this->services['sonata.formatter.twig.env.text'] = $instance = new \Twig_Environment(new \Sonata\FormatterBundle\Twig\Loader\LoaderSelector(new \Twig_Loader_String(), $this->get('twig.loader')), array('debug' => false, 'strict_variables' => false, 'charset' => 'UTF-8'));

        $instance->addExtension(new \Twig_Extension_Sandbox(new \Sonata\FormatterBundle\Twig\SecurityPolicyContainerAware($this, array(0 => 'sonata.formatter.twig.control_flow', 1 => 'sonata.formatter.twig.gist')), true));
        $instance->addExtension($this->get('sonata.formatter.twig.control_flow'));
        $instance->addExtension($this->get('sonata.formatter.twig.gist'));
        $instance->setLexer(new \Twig_Lexer($instance, array('tag_comment' => array(0 => '<#', 1 => '#>'), 'tag_block' => array(0 => '<%', 1 => '%>'), 'tag_variable' => array(0 => '<%=', 1 => '%>'))));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'twig.extension.acme.demo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Acme\DemoBundle\Twig\Extension\DemoExtension A Acme\DemoBundle\Twig\Extension\DemoExtension instance.
     */
    protected function getTwig_Extension_Acme_DemoService()
    {
        return $this->services['twig.extension.acme.demo'] = new \Acme\DemoBundle\Twig\Extension\DemoExtension($this->get('twig.loader'));
    }

    /**
     * Gets the 'validator.validator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory A Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory instance.
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'sonata.core.validator.inline' => 'sonata.core.validator.inline', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline', 'sonata.formatter.validator.formatter' => 'sonata.formatter.validator.formatter', 'sonata.media.validator.format' => 'sonata.media.validator.format'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'ap_',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'ApplicationSonataUserBundle' => 'Application\\Sonata\\UserBundle\\ApplicationSonataUserBundle',
                'SonataClassificationBundle' => 'Sonata\\ClassificationBundle\\SonataClassificationBundle',
                'ApplicationSonataClassificationBundle' => 'Application\\Sonata\\ClassificationBundle\\ApplicationSonataClassificationBundle',
                'SonataMarkItUpBundle' => 'Sonata\\MarkItUpBundle\\SonataMarkItUpBundle',
                'KnpMarkdownBundle' => 'Knp\\Bundle\\MarkdownBundle\\KnpMarkdownBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'SonataFormatterBundle' => 'Sonata\\FormatterBundle\\SonataFormatterBundle',
                'SonataMediaBundle' => 'Sonata\\MediaBundle\\SonataMediaBundle',
                'ApplicationSonataMediaBundle' => 'Application\\Sonata\\MediaBundle\\ApplicationSonataMediaBundle',
                'SonataIntlBundle' => 'Sonata\\IntlBundle\\SonataIntlBundle',
                'SonataNewsBundle' => 'Sonata\\NewsBundle\\SonataNewsBundle',
                'ApplicationSonataNewsBundle' => 'Application\\Sonata\\NewsBundle\\ApplicationSonataNewsBundle',
                'ServiceBundle' => 'Application\\ServiceBundle\\ServiceBundle',
                'ProduitBundle' => 'Application\\ProduitBundle\\ProduitBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'FOSCommentBundle' => 'FOS\\CommentBundle\\FOSCommentBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'ApplicationMailBundle' => 'Application\\MailBundle\\ApplicationMailBundle',
                'EcommerceBundle' => 'Application\\EcommerceBundle\\EcommerceBundle',
                'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\IvoryGoogleMapBundle',
                'NomayaSocialBundle' => 'Nomaya\\SocialBundle\\NomayaSocialBundle',
                'LiuggioStatsDClientBundle' => 'Liuggio\\StatsDClientBundle\\LiuggioStatsDClientBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'AcmeDemoBundle' => 'Acme\\DemoBundle\\AcmeDemoBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'tec',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'gmail',
            'mailer_host' => 'smtp.gmail.com',
            'mailer_user' => 'lilya.thebti@esprit.tn',
            'mailer_password' => 'lilya11369379',
            'locale' => 'fr',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.helper.stopwatch.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => 3,
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'translator.logging' => true,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
                'SONATA' => array(
                    0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT',
                ),
            ),
            'security.acl.permission_granting_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\PermissionGrantingStrategy',
            'security.acl.voter.class' => 'Symfony\\Component\\Security\\Acl\\Voter\\AclVoter',
            'security.acl.permission.map.class' => 'Symfony\\Component\\Security\\Acl\\Permission\\BasicPermissionMap',
            'security.acl.object_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\ObjectIdentityRetrievalStrategy',
            'security.acl.security_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\SecurityIdentityRetrievalStrategy',
            'security.acl.collection_cache.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\AclCollectionCache',
            'security.acl.cache.doctrine.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\DoctrineAclCache',
            'security.acl.dbal.provider.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\MutableAclProvider',
            'security.acl.dbal.schema.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\Schema',
            'security.acl.dbal.schema_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\AclSchemaListener',
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'SonataMediaBundle:Form:media_widgets.html.twig',
                3 => 'SonataUserBundle:Form:form_admin_fields.html.twig',
                4 => 'IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'twig.controller.exception:showAction',
                'form_themes' => array(
                    0 => 'form_div_layout.html.twig',
                    1 => 'SonataMediaBundle:Form:media_widgets.html.twig',
                ),
                'autoescape' => array(
                    0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy',
                    1 => 'guess',
                ),
                'cache' => (__DIR__.'/twig'),
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console_very_verbose' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => 'ssl',
            'swiftmailer.mailer.default.transport.smtp.port' => 465,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.gmail.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'lilya.thebti@esprit.tn',
            'swiftmailer.mailer.default.transport.smtp.password' => 'lilya11369379',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => 'login',
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FOSCommentBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => 'C:\\ProgramData\\Oracle\\Java\\javapath\\java.EXE',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.core.form_type' => 'standard',
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'cmf.block.container',
                3 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.user.block.menu' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.admin.block.search_result' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.block.service.text' => array(
                    'contexts' => array(
                        0 => 'cms',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
                'sonata.timeline.block.timeline' => array(
                    'contexts' => array(
                        0 => 'Profile',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(

                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(

            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.user.block.menu' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.timeline.block.timeline' => 'sonata.cache.noop',
                ),
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataIntlBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataIntlBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'bigint' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'integer' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'decimal' => 'SonataIntlBundle:CRUD:list_decimal.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataIntlBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataIntlBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:list_html.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataIntlBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataIntlBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'bigint' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'integer' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'decimal' => 'SonataIntlBundle:CRUD:show_decimal.html.twig',
                        'currency' => 'SonataIntlBundle:CRUD:show_currency.html.twig',
                        'percent' => 'SonataIntlBundle:CRUD:show_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                        'html' => 'SonataAdminBundle:CRUD:show_html.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.admin.configuration.templates' => array(
                'history_revision_timestamp' => 'SonataIntlBundle:CRUD:history_revision_timestamp.html.twig',
                'user_block' => 'SonataUserBundle:Admin/Core:user_block.html.twig',
                'add_block' => 'SonataAdminBundle:Core:add_block.html.twig',
                'layout' => 'SonataAdminBundle::standard_layout.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'filter' => 'SonataAdminBundle:Form:filter_admin_fields.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'show_compare' => 'SonataAdminBundle:CRUD:show_compare.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
                'tab_menu_template' => 'SonataAdminBundle:Core:tab_menu_template.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(

            ),
            'sonata.admin.configuration.dashboard_groups' => array(

            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(

                    ),
                    'type' => 'sonata.admin.block.admin_list',
                ),
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(

            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(

                ),
                'excludes' => array(

                ),
                'implements' => array(

                ),
                'extends' => array(

                ),
                'instanceof' => array(

                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Authentication',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'sonata.user.admin.groupname' => 'sonata_user',
            'security.acl.user_voter.class' => 'Sonata\\UserBundle\\Security\\Authorization\\Voter\\UserAclVoter',
            'sonata.user.admin.user.class' => 'Sonata\\UserBundle\\Admin\\Entity\\UserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.impersonating' => false,
            'sonata.user.google.authenticator.enabled' => true,
            'sonata.user.profile.form.type' => 'sonata_user_profile',
            'sonata.user.profile.form.name' => 'sonata_user_profile_form',
            'sonata.user.profile.form.validation_groups' => array(
                0 => 'Profile',
            ),
            'sonata.user.register.confirm.redirect_route' => 'sonata_user_profile_show',
            'sonata.user.register.confirm.redirect_route_params' => array(

            ),
            'sonata.user.configuration.profile_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'type' => 'sonata.block.service.text',
                    'settings' => array(
                        'content' => '<h3>All For Deal </h3>',
                    ),
                ),
                1 => array(
                    'position' => 'right',
                    'type' => 'sonata.timeline.block.timeline',
                    'settings' => array(
                        'max_per_page' => 15,
                    ),
                ),
                2 => array(
                    'position' => 'right',
                    'type' => 'sonata.news.block.recent_posts',
                    'settings' => array(
                        'title' => 'Recent Posts',
                        'number' => 5,
                        'mode' => 'public',
                    ),
                ),
                3 => array(
                    'position' => 'right',
                    'type' => 'sonata.news.block.recent_comments',
                    'settings' => array(
                        'title' => 'Recent Comments',
                        'number' => 5,
                        'mode' => 'public',
                    ),
                ),
            ),
            'sonata.classification.manager.category.class' => 'Sonata\\ClassificationBundle\\Entity\\CategoryManager',
            'sonata.classification.manager.tag.class' => 'Sonata\\ClassificationBundle\\Entity\\TagManager',
            'sonata.classification.manager.collection.class' => 'Sonata\\ClassificationBundle\\Entity\\CollectionManager',
            'sonata.classification.admin.tag.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag',
            'sonata.classification.admin.category.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Category',
            'sonata.classification.admin.collection.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection',
            'sonata.classification.manager.tag.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Tag',
            'sonata.classification.manager.category.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Category',
            'sonata.classification.manager.collection.entity' => 'Application\\Sonata\\ClassificationBundle\\Entity\\Collection',
            'sonata.classification.admin.category.class' => 'Sonata\\ClassificationBundle\\Admin\\CategoryAdmin',
            'sonata.classification.admin.category.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.category.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.tag.class' => 'Sonata\\ClassificationBundle\\Admin\\TagAdmin',
            'sonata.classification.admin.tag.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.tag.translation_domain' => 'SonataClassificationBundle',
            'sonata.classification.admin.collection.class' => 'Sonata\\ClassificationBundle\\Admin\\CollectionAdmin',
            'sonata.classification.admin.collection.controller' => 'SonataAdminBundle:CRUD',
            'sonata.classification.admin.collection.translation_domain' => 'SonataClassificationBundle',
            'templating.helper.markdown.class' => 'Knp\\Bundle\\MarkdownBundle\\Helper\\MarkdownHelper',
            'ivory_ck_editor.form.type.class' => 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType',
            'ivory_ck_editor.config_manager.class' => 'Ivory\\CKEditorBundle\\Model\\ConfigManager',
            'ivory_ck_editor.plugin_manager.class' => 'Ivory\\CKEditorBundle\\Model\\PluginManager',
            'ivory_ck_editor.styles_set_manager.class' => 'Ivory\\CKEditorBundle\\Model\\StylesSetManager',
            'ivory_ck_editor.template_manager.class' => 'Ivory\\CKEditorBundle\\Model\\TemplateManager',
            'ivory_ck_editor.templating.helper.class' => 'Ivory\\CKEditorBundle\\Templating\\CKEditorHelper',
            'ivory_ck_editor.twig_extension.class' => 'Ivory\\CKEditorBundle\\Twig\\CKEditorExtension',
            'ivory_ck_editor.form.type.enable' => true,
            'ivory_ck_editor.form.type.autoload' => true,
            'ivory_ck_editor.form.type.base_path' => 'bundles/ivoryckeditor/',
            'ivory_ck_editor.form.type.js_path' => 'bundles/ivoryckeditor/ckeditor.js',
            'sonata.formatter.text.markdown.class' => 'Sonata\\FormatterBundle\\Formatter\\MarkdownFormatter',
            'sonata.formatter.text.text.class' => 'Sonata\\FormatterBundle\\Formatter\\TextFormatter',
            'sonata.formatter.text.raw.class' => 'Sonata\\FormatterBundle\\Formatter\\RawFormatter',
            'sonata.formatter.text.twigengine.class' => 'Sonata\\FormatterBundle\\Formatter\\TwigFormatter',
            'sonata.formatter.block.formatter.class' => 'Sonata\\FormatterBundle\\Block\\FormatterBlockService',
            'sonata.formatter.ckeditor.extension.class' => 'Sonata\\FormatterBundle\\Admin\\CkeditorAdminExtension',
            'sonata.formatter.ckeditor.configuration.templates' => array(
                'browser' => 'SonataFormatterBundle:Ckeditor:browser.html.twig',
                'upload' => 'SonataFormatterBundle:Ckeditor:upload.html.twig',
            ),
            'sonata.media.provider.image.class' => 'Sonata\\MediaBundle\\Provider\\ImageProvider',
            'sonata.media.provider.file.class' => 'Sonata\\MediaBundle\\Provider\\FileProvider',
            'sonata.media.provider.youtube.class' => 'Sonata\\MediaBundle\\Provider\\YouTubeProvider',
            'sonata.media.provider.dailymotion.class' => 'Sonata\\MediaBundle\\Provider\\DailyMotionProvider',
            'sonata.media.provider.vimeo.class' => 'Sonata\\MediaBundle\\Provider\\VimeoProvider',
            'sonata.media.thumbnail.format' => 'Sonata\\MediaBundle\\Thumbnail\\FormatThumbnail',
            'sonata.media.thumbnail.format.default' => 'jpg',
            'sonata.media.thumbnail.liip_imagine' => 'Sonata\\MediaBundle\\Thumbnail\\LiipImagineThumbnail',
            'sonata.media.pool.class' => 'Sonata\\MediaBundle\\Provider\\Pool',
            'sonata.media.resizer.simple.class' => 'Sonata\\MediaBundle\\Resizer\\SimpleResizer',
            'sonata.media.resizer.square.class' => 'Sonata\\MediaBundle\\Resizer\\SquareResizer',
            'sonata.media.block.media.class' => 'Sonata\\MediaBundle\\Block\\MediaBlockService',
            'sonata.media.block.feature_media.class' => 'Sonata\\MediaBundle\\Block\\FeatureMediaBlockService',
            'sonata.media.block.gallery.class' => 'Sonata\\MediaBundle\\Block\\GalleryBlockService',
            'sonata.media.metadata.proxy.class' => 'Sonata\\MediaBundle\\Metadata\\ProxyMetadataBuilder',
            'sonata.media.metadata.amazon.class' => 'Sonata\\MediaBundle\\Metadata\\AmazonMetadataBuilder',
            'sonata.media.metadata.noop.class' => 'Sonata\\MediaBundle\\Metadata\\NoopMetadataBuilder',
            'sonata.media.adapater.filesystem.opencloud.class' => '',
            'sonata.media.manager.media.class' => 'Sonata\\MediaBundle\\Entity\\MediaManager',
            'sonata.media.manager.gallery.class' => 'Sonata\\MediaBundle\\Entity\\GalleryManager',
            'sonata.media.admin.media.class' => 'Sonata\\MediaBundle\\Admin\\ORM\\MediaAdmin',
            'sonata.media.admin.media.controller' => 'SonataMediaBundle:MediaAdmin',
            'sonata.media.admin.media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery.class' => 'Sonata\\MediaBundle\\Admin\\GalleryAdmin',
            'sonata.media.admin.gallery.controller' => 'SonataMediaBundle:GalleryAdmin',
            'sonata.media.admin.gallery.translation_domain' => 'SonataMediaBundle',
            'sonata.media.admin.gallery_has_media.class' => 'Sonata\\MediaBundle\\Admin\\GalleryHasMediaAdmin',
            'sonata.media.admin.gallery_has_media.controller' => 'SonataAdminBundle:CRUD',
            'sonata.media.admin.gallery_has_media.translation_domain' => 'SonataMediaBundle',
            'sonata.media.resizer.simple.adapter.mode' => 'inset',
            'sonata.media.resizer.square.adapter.mode' => 'inset',
            'sonata.media.admin.media.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.admin.gallery.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'sonata.media.admin.gallery_has_media.entity' => 'Application\\Sonata\\MediaBundle\\Entity\\GalleryHasMedia',
            'sonata.media.media.class' => 'Application\\Sonata\\MediaBundle\\Entity\\Media',
            'sonata.media.gallery.class' => 'Application\\Sonata\\MediaBundle\\Entity\\Gallery',
            'sonata.intl.locale_detector.request.class' => 'Sonata\\IntlBundle\\Locale\\RequestDetector',
            'sonata.intl.locale_detector.session.class' => 'Sonata\\IntlBundle\\Locale\\SessionDetector',
            'sonata.intl.templating.helper.locale.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\LocaleHelper',
            'sonata.intl.templating.helper.number.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\NumberHelper',
            'sonata.intl.templating.helper.datetime.class' => 'Sonata\\IntlBundle\\Templating\\Helper\\DateTimeHelper',
            'sonata.intl.timezone_detector.chain.class' => 'Sonata\\IntlBundle\\Timezone\\ChainTimezoneDetector',
            'sonata.intl.timezone_detector.user.class' => 'Sonata\\IntlBundle\\Timezone\\UserBasedTimezoneDetector',
            'sonata.intl.timezone_detector.locale.class' => 'Sonata\\IntlBundle\\Timezone\\LocaleBasedTimezoneDetector',
            'sonata.intl.twig.helper.locale.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\LocaleExtension',
            'sonata.intl.twig.helper.number.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\NumberExtension',
            'sonata.intl.twig.helper.datetime.class' => 'Sonata\\IntlBundle\\Twig\\Extension\\DateTimeExtension',
            'sonata_intl.timezone.detectors' => array(
                0 => 'sonata.intl.timezone_detector.user',
                1 => 'sonata.intl.timezone_detector.locale',
            ),
            'sonata.news.manager.comment.class' => 'Sonata\\NewsBundle\\Entity\\CommentManager',
            'sonata.news.manager.post.class' => 'Sonata\\NewsBundle\\Entity\\PostManager',
            'sonata.news.admin.post.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Post',
            'sonata.news.admin.comment.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Comment',
            'sonata.news.manager.post.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Post',
            'sonata.news.manager.comment.entity' => 'Application\\Sonata\\NewsBundle\\Entity\\Comment',
            'sonata.news.admin.post.class' => 'Sonata\\NewsBundle\\Admin\\PostAdmin',
            'sonata.news.admin.post.controller' => 'SonataAdminBundle:CRUD',
            'sonata.news.admin.post.translation_domain' => 'SonataNewsBundle',
            'sonata.news.admin.comment.class' => 'Sonata\\NewsBundle\\Admin\\CommentAdmin',
            'sonata.news.admin.comment.controller' => 'SonataNewsBundle:CommentAdmin',
            'sonata.news.admin.comment.translation_domain' => 'SonataNewsBundle',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.view_handler.default.class' => 'FOS\\RestBundle\\View\\ViewHandler',
            'fos_rest.view_handler.jsonp.class' => 'FOS\\RestBundle\\View\\JsonpHandler',
            'fos_rest.serializer.exception_wrapper_serialize_handler.class' => 'FOS\\RestBundle\\Serializer\\ExceptionWrapperSerializeHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_rest.violation_formatter.class' => 'FOS\\RestBundle\\Util\\ViolationFormatter',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => (__DIR__.'/fos_rest'),
            'fos_rest.routing.loader.default_format' => NULL,
            'fos_rest.routing.loader.include_format' => true,
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.exception.codes' => array(

            ),
            'fos_rest.exception.messages' => array(

            ),
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'fos_rest.mime_types' => array(

            ),
            'fos_rest.formats' => array(
                'rss' => false,
                'html' => true,
            ),
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => false,
            'fos_rest.default_engine' => 'twig',
            'fos_rest.normalizer.camel_keys.class' => 'FOS\\RestBundle\\Normalizer\\CamelKeysNormalizer',
            'fos_rest.decoder.json.class' => 'FOS\\RestBundle\\Decoder\\JsonDecoder',
            'fos_rest.decoder.jsontoform.class' => 'FOS\\RestBundle\\Decoder\\JsonToFormDecoder',
            'fos_rest.decoder.xml.class' => 'FOS\\RestBundle\\Decoder\\XmlDecoder',
            'fos_rest.decoder_provider.class' => 'FOS\\RestBundle\\Decoder\\ContainerDecoderProvider',
            'fos_rest.body_listener.class' => 'FOS\\RestBundle\\EventListener\\BodyListener',
            'fos_rest.throw_exception_on_unsupported_content_type' => false,
            'fos_rest.body_default_format' => NULL,
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_comment.model.thread.class' => 'Application\\ServiceBundle\\Entity\\Thread',
            'fos_comment.model.comment.class' => 'Application\\ServiceBundle\\Entity\\Comment',
            'fos_comment.model.vote.class' => 'Application\\ServiceBundle\\Entity\\Vote',
            'fos_comment.manager.thread.default.class' => 'FOS\\CommentBundle\\Entity\\ThreadManager',
            'fos_comment.manager.comment.default.class' => 'FOS\\CommentBundle\\Entity\\CommentManager',
            'fos_comment.manager.vote.default.class' => 'FOS\\CommentBundle\\Entity\\VoteManager',
            'fos_comment.listener.comment_vote_score.class' => 'FOS\\CommentBundle\\EventListener\\CommentVoteScoreListener',
            'fos_comment.listener.thread_counters.class' => 'FOS\\CommentBundle\\EventListener\\ThreadCountersListener',
            'fos_comment.listener.thread_permalink.class' => 'FOS\\CommentBundle\\EventListener\\ThreadPermalinkListener',
            'fos_comment.listener.comment_blamer.class' => 'FOS\\CommentBundle\\EventListener\\CommentBlamerListener',
            'fos_comment.listener.vote_blamer.class' => 'FOS\\CommentBundle\\EventListener\\VoteBlamerListener',
            'fos_comment.listener.closed_threads.class' => 'FOS\\CommentBundle\\EventListener\\ClosedThreadListener',
            'fos_comment.sorting_factory.class' => 'FOS\\CommentBundle\\Sorting\\SortingFactory',
            'fos_comment.sorter.date.class' => 'FOS\\CommentBundle\\Sorting\\DateSorting',
            'fos_comment.template.engine' => 'twig',
            'fos_comment.model_manager_name' => NULL,
            'fos_comment.form.comment.type' => 'fos_comment_comment',
            'fos_comment.form.comment.name' => 'fos_comment_comment',
            'fos_comment.form.thread.type' => 'fos_comment_thread',
            'fos_comment.form.thread.name' => 'fos_comment_thread',
            'fos_comment.form.commentable_thread.type' => 'fos_comment_commentable_thread',
            'fos_comment.form.commentable_thread.name' => 'fos_comment_commentable_thread',
            'fos_comment.form.delete_comment.type' => 'fos_comment_delete_comment',
            'fos_comment.form.delete_comment.name' => 'fos_comment_delete_comment',
            'fos_comment.form.vote.type' => 'fos_comment_vote',
            'fos_comment.form.vote.name' => 'fos_comment_vote',
            'fos_comment.sorting_factory.default_sorter' => 'date_desc',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'ivory_google_map.helper.api.class' => 'Ivory\\GoogleMap\\Helper\\ApiHelper',
            'ivory_google_map.coordinate.class' => 'Ivory\\GoogleMap\\Base\\Coordinate',
            'ivory_google_map.coordinate.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\CoordinateBuilder',
            'ivory_google_map.coordinate.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\CoordinateHelper',
            'ivory_google_map.bound.class' => 'Ivory\\GoogleMap\\Base\\Bound',
            'ivory_google_map.bound.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\BoundBuilder',
            'ivory_google_map.bound.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\BoundHelper',
            'ivory_google_map.point.class' => 'Ivory\\GoogleMap\\Base\\Point',
            'ivory_google_map.point.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\PointBuilder',
            'ivory_google_map.point.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\PointHelper',
            'ivory_google_map.size.class' => 'Ivory\\GoogleMap\\Base\\Size',
            'ivory_google_map.size.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\SizeBuilder',
            'ivory_google_map.size.helper.class' => 'Ivory\\GoogleMap\\Helper\\Base\\SizeHelper',
            'ivory_google_map.business_account.class' => 'Ivory\\GoogleMap\\Services\\BusinessAccount',
            'ivory_google_map.map_type_control.class' => 'Ivory\\GoogleMap\\Controls\\MapTypeControl',
            'ivory_google_map.map_type_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\MapTypeControlBuilder',
            'ivory_google_map.map_type_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\MapTypeControlHelper',
            'ivory_google_map.overview_map_control.class' => 'Ivory\\GoogleMap\\Controls\\OverviewMapControl',
            'ivory_google_map.overview_map_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\OverviewMapControlBuilder',
            'ivory_google_map.overview_map_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\OverviewMapControlHelper',
            'ivory_google_map.pan_control.class' => 'Ivory\\GoogleMap\\Controls\\PanControl',
            'ivory_google_map.pan_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\PanControlBuilder',
            'ivory_google_map.pan_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\PanControlHelper',
            'ivory_google_map.rotate_control.class' => 'Ivory\\GoogleMap\\Controls\\RotateControl',
            'ivory_google_map.rotate_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\RotateControlBuilder',
            'ivory_google_map.rotate_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\RotateControlHelper',
            'ivory_google_map.scale_control.class' => 'Ivory\\GoogleMap\\Controls\\ScaleControl',
            'ivory_google_map.scale_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\ScaleControlBuilder',
            'ivory_google_map.scale_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ScaleControlHelper',
            'ivory_google_map.street_view_control.class' => 'Ivory\\GoogleMap\\Controls\\StreetViewControl',
            'ivory_google_map.street_view_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\StreetViewControlBuilder',
            'ivory_google_map.street_view_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\StreetViewControlHelper',
            'ivory_google_map.zoom_control.class' => 'Ivory\\GoogleMap\\Controls\\ZoomControl',
            'ivory_google_map.zoom_control.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\ZoomControlBuilder',
            'ivory_google_map.zoom_control.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ZoomControlHelper',
            'ivory_google_map.control_position.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ControlPositionHelper',
            'ivory_google_map.map_type_control_style.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\MapTypeControlStyleHelper',
            'ivory_google_map.scale_control_style.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ScaleControlStyleHelper',
            'ivory_google_map.zoom_control_style.helper.class' => 'Ivory\\GoogleMap\\Helper\\Controls\\ZoomControlStyleHelper',
            'ivory_google_map.event_manager.class' => 'Ivory\\GoogleMap\\Events\\EventManager',
            'ivory_google_map.event_manager.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Events\\EventManagerBuilder',
            'ivory_google_map.event_manager.helper.class' => 'Ivory\\GoogleMap\\Helper\\Events\\EventManagerHelper',
            'ivory_google_map.event.class' => 'Ivory\\GoogleMap\\Events\\Event',
            'ivory_google_map.event.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Events\\EventBuilder',
            'ivory_google_map.helper.extension.core.class' => 'Ivory\\GoogleMap\\Helper\\Extension\\CoreExtensionHelper',
            'ivory_google_map.helper.extension.info_box.class' => 'Ivory\\GoogleMap\\Helper\\Extension\\InfoBoxExtensionHelper',
            'ivory_google_map.template.helper.class' => 'Ivory\\GoogleMapBundle\\Helper\\TemplateHelper',
            'ivory_google_map.kml_layer.class' => 'Ivory\\GoogleMap\\Layers\\KMLLayer',
            'ivory_google_map.kml_layer.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Layers\\KMLLayerBuilder',
            'ivory_google_map.kml_layer.helper.class' => 'Ivory\\GoogleMap\\Helper\\Layers\\KMLLayerHelper',
            'ivory_google_map.map.class' => 'Ivory\\GoogleMap\\Map',
            'ivory_google_map.map.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\MapBuilder',
            'ivory_google_map.map.helper.class' => 'Ivory\\GoogleMap\\Helper\\MapHelper',
            'ivory_google_map.map_type_id.helper.class' => 'Ivory\\GoogleMap\\Helper\\MapTypeIdHelper',
            'ivory_google_map.animation.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\AnimationHelper',
            'ivory_google_map.circle.class' => 'Ivory\\GoogleMap\\Overlays\\Circle',
            'ivory_google_map.circle.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\CircleBuilder',
            'ivory_google_map.circle.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\CircleHelper',
            'ivory_google_map.encoded_polyline.class' => 'Ivory\\GoogleMap\\Overlays\\EncodedPolyline',
            'ivory_google_map.encoded_polyline.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\EncodedPolylineBuilder',
            'ivory_google_map.encoded_polyline.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\EncodedPolylineHelper',
            'ivory_google_map.encoding.helper.class' => 'Ivory\\GoogleMap\\Helper\\Geometry\\EncodingHelper',
            'ivory_google_map.ground_overlay.class' => 'Ivory\\GoogleMap\\Overlays\\GroundOverlay',
            'ivory_google_map.ground_overlay.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\GroundOverlayBuilder',
            'ivory_google_map.ground_overlay.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\GroundOverlayHelper',
            'ivory_google_map.info_window.class' => 'Ivory\\GoogleMap\\Overlays\\InfoWindow',
            'ivory_google_map.info_window.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\InfoWindowBuilder',
            'ivory_google_map.info_window.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\InfoWindowHelper',
            'ivory_google_map.marker_cluster.class' => 'Ivory\\GoogleMap\\Overlays\\MarkerCluster',
            'ivory_google_map.marker_cluster.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerClusterBuilder',
            'ivory_google_map.marker_cluster.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\MarkerClusterHelper',
            'ivory_google_map.marker_cluster.helper.abstract.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\AbstractMarkerClusterHelper',
            'ivory_google_map.marker_cluster.helper.default.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\DefaultMarkerClusterHelper',
            'ivory_google_map.marker_cluster.helper.js.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerCluster\\JsMarkerClusterHelper',
            'ivory_google_map.marker.class' => 'Ivory\\GoogleMap\\Overlays\\Marker',
            'ivory_google_map.marker.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerBuilder',
            'ivory_google_map.marker.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerHelper',
            'ivory_google_map.marker_image.class' => 'Ivory\\GoogleMap\\Overlays\\MarkerImage',
            'ivory_google_map.marker_image.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerImageBuilder',
            'ivory_google_map.marker_image.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerImageHelper',
            'ivory_google_map.marker_shape.class' => 'Ivory\\GoogleMap\\Overlays\\MarkerShape',
            'ivory_google_map.marker_shape.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerShapeBuilder',
            'ivory_google_map.marker_shape.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\MarkerShapeHelper',
            'ivory_google_map.polygon.class' => 'Ivory\\GoogleMap\\Overlays\\Polygon',
            'ivory_google_map.polygon.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\PolygonBuilder',
            'ivory_google_map.polygon.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\PolygonHelper',
            'ivory_google_map.polyline.class' => 'Ivory\\GoogleMap\\Overlays\\Polyline',
            'ivory_google_map.polyline.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\PolylineBuilder',
            'ivory_google_map.polyline.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\PolylineHelper',
            'ivory_google_map.rectangle.class' => 'Ivory\\GoogleMap\\Overlays\\Rectangle',
            'ivory_google_map.rectangle.builder.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\RectangleBuilder',
            'ivory_google_map.rectangle.helper.class' => 'Ivory\\GoogleMap\\Helper\\Overlays\\RectangleHelper',
            'ivory_google_map.places_autocomplete.form.type.class' => 'Ivory\\GoogleMapBundle\\Form\\Type\\PlacesAutocompleteType',
            'ivory_google_map.places_autocomplete.helper.class' => 'Ivory\\GoogleMap\\Helper\\Places\\AutocompleteHelper',
            'ivory_google_map.twig.extension.class' => 'Ivory\\GoogleMapBundle\\Twig\\GoogleMapExtension',
            'buttons.facebook' => array(
                'url' => 'https://www.facebook.com/esprit.tn',
                'locale' => 'fr_FR',
                'send' => true,
                'width' => 300,
                'showFaces' => true,
                'layout' => 'button_count',
                'share' => true,
            ),
            'buttons.twitter' => array(
                'url' => NULL,
                'locale' => 'fr',
                'message' => 'Je veux partager ça avec vous',
                'text' => 'Tweet',
                'via' => 'L\'Equipe cartedevisitevirtuelle.fr',
                'tag' => 'ttot',
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'buttons.googleplus' => array(
                'url' => NULL,
                'locale' => 'fr',
                'size' => 'medium',
                'annotation' => 'bubble',
                'width' => 300,
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'buttons.linkedin' => array(
                'url' => NULL,
                'locale' => 'fr_FR',
                'counter' => 'right',
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'buttons.pinterest' => array(
                'url' => NULL,
                'locale' => 'fr',
                'showFaces' => false,
                'send' => true,
                'share' => true,
            ),
            'links.facebook' => array(
                'network' => 'facebook',
                'url' => 'http://www.facebook.com/',
                'theme' => 'default',
            ),
            'links.googleplus' => array(
                'network' => 'googleplus',
                'url' => 'https://plus.google.com/',
                'theme' => 'default',
            ),
            'social.theme' => 'default',
            'liuggio_stats_d_client.sender.class' => 'Liuggio\\StatsdClient\\Sender\\SocketSender',
            'liuggio_stats_d_client.sender.debug_class' => 'Liuggio\\StatsdClient\\Sender\\SysLogSender',
            'liuggio_stats_d_client.connection.host' => 'localhost',
            'liuggio_stats_d_client.connection.port' => 8125,
            'liuggio_stats_d_client.connection.class' => 'Liuggio\\StatsdClient\\Sender\\SocketSender',
            'liuggio_stats_d_client.connection.debug_class' => 'Liuggio\\StatsdClient\\Sender\\SysLogSender',
            'liuggio_stats_d_client.connection.debug' => true,
            'liuggio_stats_d_client.connection.reduce_packet' => true,
            'liuggio_stats_d_client.connection.protocol' => 'udp',
            'liuggio_stats_d_client.connection.fail_silently' => true,
            'liuggio_stats_d_client.enable_collector' => false,
            'liuggio_stats_d_client.collectors' => array(

            ),
            'liuggio_stats_d_client.service.class' => 'Liuggio\\StatsdClient\\StatsdClient',
            'liuggio_stats_d_client.entity.class' => 'Liuggio\\StatsdClient\\Entity\\StatsdData',
            'liuggio_stats_d_client.factory.class' => 'Liuggio\\StatsdClient\\Factory\\StatsdDataFactory',
            'liuggio_stats_d_client.sender.debug.class' => 'Liuggio\\StatsdClient\\Sender\\EchoSender',
            'liuggio_stats_d_client.collector.service.class' => 'Liuggio\\StatsDClientBundle\\Service\\StatsDCollectorService',
            'liuggio_stats_d_client.collector.listener.class' => 'Liuggio\\StatsDClientBundle\\Listener\\StatsDCollectorListener',
            'liuggio_stats_d_client.collector.dbal.class' => 'Liuggio\\StatsDClientBundle\\StatsCollector\\DbalStatsCollector',
            'liuggio_stats_d.sender.class' => 'Liuggio\\StatsdClient\\Service\\StatsdService',
            'liuggio_stats_d_client.monolog_handler.class' => 'Liuggio\\StatsdClient\\Monolog\\Handler\\StatsDHandler',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'sensio_distribution.webconfigurator.doctrine_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\DoctrineStep',
            'sensio_distribution.webconfigurator.secret_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\SecretStep',
            'sensio_distribution.security_checker.class' => 'SensioLabs\\Security\\SecurityChecker',
            'sensio_distribution.security_checker.command.class' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
            'sonata.core.form.types' => array(
                0 => 'form.type.form',
                1 => 'form.type.birthday',
                2 => 'form.type.checkbox',
                3 => 'form.type.choice',
                4 => 'form.type.collection',
                5 => 'form.type.country',
                6 => 'form.type.date',
                7 => 'form.type.datetime',
                8 => 'form.type.email',
                9 => 'form.type.file',
                10 => 'form.type.hidden',
                11 => 'form.type.integer',
                12 => 'form.type.language',
                13 => 'form.type.locale',
                14 => 'form.type.money',
                15 => 'form.type.number',
                16 => 'form.type.password',
                17 => 'form.type.percent',
                18 => 'form.type.radio',
                19 => 'form.type.repeated',
                20 => 'form.type.search',
                21 => 'form.type.textarea',
                22 => 'form.type.text',
                23 => 'form.type.time',
                24 => 'form.type.timezone',
                25 => 'form.type.url',
                26 => 'form.type.button',
                27 => 'form.type.submit',
                28 => 'form.type.reset',
                29 => 'form.type.currency',
                30 => 'form.type.entity',
                31 => 'sonata.core.form.type.array',
                32 => 'sonata.core.form.type.boolean',
                33 => 'sonata.core.form.type.collection',
                34 => 'sonata.core.form.type.translatable_choice',
                35 => 'sonata.core.form.type.date_range',
                36 => 'sonata.core.form.type.datetime_range',
                37 => 'sonata.core.form.type.date_picker',
                38 => 'sonata.core.form.type.datetime_picker',
                39 => 'sonata.core.form.type.date_range_picker',
                40 => 'sonata.core.form.type.datetime_range_picker',
                41 => 'sonata.core.form.type.equal',
                42 => 'sonata.core.form.type.color_selector',
                43 => 'sonata.block.form.type.block',
                44 => 'sonata.block.form.type.container_template',
                45 => 'sonata.admin.form.type.admin',
                46 => 'sonata.admin.form.type.model_choice',
                47 => 'sonata.admin.form.type.model_list',
                48 => 'sonata.admin.form.type.model_reference',
                49 => 'sonata.admin.form.type.model_hidden',
                50 => 'sonata.admin.form.type.model_autocomplete',
                51 => 'sonata.admin.form.type.collection',
                52 => 'sonata.admin.form.filter.type.number',
                53 => 'sonata.admin.form.filter.type.choice',
                54 => 'sonata.admin.form.filter.type.default',
                55 => 'sonata.admin.form.filter.type.date',
                56 => 'sonata.admin.form.filter.type.daterange',
                57 => 'sonata.admin.form.filter.type.datetime',
                58 => 'sonata.admin.form.filter.type.datetime_range',
                59 => 'fos_user.username_form_type',
                60 => 'fos_user.profile.form.type',
                61 => 'fos_user.registration.form.type',
                62 => 'fos_user.change_password.form.type',
                63 => 'fos_user.resetting.form.type',
                64 => 'fos_user.group.form.type',
                65 => 'sonata.user.form.type.security_roles',
                66 => 'sonata.user.profile.form.type',
                67 => 'sonata.user.form.gender_list',
                68 => 'sonata.classification.form.type.category_selector',
                69 => 'sonata.classification.api.form.type.category',
                70 => 'sonata.classification.api.form.type.collection',
                71 => 'sonata.classification.api.form.type.tag',
                72 => 'ivory_ck_editor.form.type',
                73 => 'sonata.formatter.form.type.selector',
                74 => 'sonata.media.form.type.media',
                75 => 'sonata.media.api.form.type.doctrine.media',
                76 => 'sonata.media.api.form.type.media',
                77 => 'sonata.media.api.form.type.gallery',
                78 => 'sonata.media.api.form.type.gallery_has_media',
                79 => 'sonata.news.form.type.comment',
                80 => 'fos_comment.form_type.comment.default',
                81 => 'fos_comment.form_type.commentable_thread.default',
                82 => 'fos_comment.form_type.delete_comment.default',
                83 => 'fos_comment.form_type.thread.default',
                84 => 'fos_comment.form_type.vote.default',
                85 => 'ivory_google_map.places_autocomplete.form.type',
            ),
            'sonata.core.form.type_extensions' => array(
                0 => 'form.type_extension.form.http_foundation',
                1 => 'form.type_extension.form.validator',
                2 => 'form.type_extension.repeated.validator',
                3 => 'form.type_extension.submit.validator',
                4 => 'form.type_extension.csrf',
                5 => 'form.type_extension.form.data_collector',
                6 => 'sonata.admin.form.extension.field',
                7 => 'sonata.admin.form.extension.field.mopa',
            ),
        );
    }
}
